<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\CBitrixComponent::includeComponentClass('system:standard.elements.list');

class PhotoUploadComponent extends StandardElementListComponent
{

    protected function executeEpilog()
    {
        if ($this->request->getPost('AJAX_SUBMIT') === 'Y') {
            $this->uploadPhoto();
        }
    }

    public function uploadPhoto()
    {
        if (CModule::IncludeModule("iblock")) {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();
            $result = array();
            $elID = $_POST["ALBUM_CODE"];

            $VALUES = array();
            $res = CIBlockElement::GetProperty($this->arResult["IBLOCK_ID"], $elID);
            while ($ob = $res->GetNext()) {
                $VALUES["PHOTOS"][] = [
                    "VALUE" => CFile::MakeFileArray($ob["VALUE"]),
                    "DESCRIPTION" => $ob["DESCRIPTION"]
                ];
            }
            $tempArr = array();
            function reArrayFiles($file_post)
            {

                $file_ary = array();
                $file_count = count($file_post['name']);
                $file_keys = array_keys($file_post);

                for ($i = 0; $i < $file_count; $i++) {
                    foreach ($file_keys as $key) {
                        $file_ary[$i][$key] = $file_post[$key][$i];
                    }
                }

                return $file_ary;
            }

            if ($_FILES['img']) {
                $file_ary = reArrayFiles($_FILES['img']);

                foreach ($file_ary as $file) {
                    $tempArr[] = [
                        "name" => $file["name"],
                        "type" => $file["type"],
                        "tmp_name" => $file["tmp_name"],
                        "error" => $file["error"],
                        "size" => $file["size"]
                    ];
                }
            }
            foreach ($tempArr as $el) {
                $VALUES["PHOTOS"][] = [
                    "VALUE" => $el,
                    "DESCRIPTION" => $_POST['PHOTO_DESCRIPTION']
                ];
            }
            $result["help"] = $_FILES["img"]["error"][0];
            if ($_FILES["img"]["error"][0] == 0) {
                CIBlockElement::SetPropertyValuesEx($elID, $this->arResult["IBLOCK_ID"], $VALUES);
                CIBlock::clearIBlockTagCache($this->arResult["IBLOCK_ID"]);
                $result["status"] = "success";
            } else {
                $result["status"] = "error";
            }
            header('Content-Type: application/json');
            echo(json_encode($result));
            die();
        }
    }
}
