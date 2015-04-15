<?php
class Meanbee_Theme_Helper_Srcset extends Mage_Core_Helper_Data {

    public function getResolutionSrcset($path, $height, $width, $value) {

        $srcset = array();

        for (; $value > 0; $value--) {
            $current_width = $width * $value;
            $current_height = $height * $value;

            $resized_image = (string) $path->resize($current_width, $current_height);

            $srcset[] = sprintf("%s %sx", $resized_image, $value);
        }

        return join(', ', array_reverse($srcset));
    }
}