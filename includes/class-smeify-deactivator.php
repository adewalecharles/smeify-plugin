<?php

class SmeifyDeactivator {

    public static function deactivate() {
        flush_rewrite_rules();
    }

}