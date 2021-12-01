<?php
class SmeifyActivator {
    public static function activate() {
        // Do something when plugin is activated
//        global $wpdb;
//
//        $charset_collate = $wpdb->get_charset_collate();
//
//        $settings = "CREATE TABLE '.$wpdb->prefix . 'smeify_settings (
//            id mediumint(9) NOT NULL AUTO_INCREMENT,
//            expires datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
//            token text DEFAULT 'ahsidhuiwfhawjncklasndfjqwifuq89767' NOT NULL,
//            status text DEFAULT 'active' NOT NULL,
//            paystack_secret_key text DEFAULT 'ahsidhuiwfhawjncklasndfjqwifuq89767' NOT NULL,
//            paystack_public_key text DEFAULT 'ahsidhuiwfhawjncklasndfjqwifuq89767' NOT NULL,
//            PRIMARY KEY  (id)
//        ) $charset_collate;";
//
//        $data = "CREATE TABLE '.$wpdb->prefix . 'smeify_data (
//            id mediumint(9) NOT NULL AUTO_INCREMENT,
//            name text  NOT NULL,
//            price double NOT NULL,
//            plan_id integer NOT NULL,
//            validity text DEFAULT 'smeify' NOT NULL,
//            created_at datetime NULLABLE,
//            updated_at datetime NULLABLE,
//            PRIMARY KEY  (id)
//        ) $charset_collate;";
//
//        $sas = "CREATE TABLE '.$wpdb->prefix . 'smeify_sas (
//            id mediumint(9) NOT NULL AUTO_INCREMENT,
//            name text NOT NULL,
//            price integer NULLABLE,
//            created_at datetime NULLABLE,
//            updated_at datetime NULLABLE,
//            PRIMARY KEY  (id)
//        ) $charset_collate;";
//
//        $vtu = "CREATE TABLE '.$wpdb->prefix . 'smeify_vtu (
//            id mediumint(9) NOT NULL AUTO_INCREMENT,
//            name text NOT NULL,
//            price integer NULLABLE ,
//            created_at datetime NULLABLE,
//            updated_at datetime NULLABLE,
//            PRIMARY KEY  (id)
//        ) $charset_collate;";
//
//        $wallet = "CREATE TABLE '.$wpdb->prefix . 'smeify_wallet (
//            id mediumint(9) NOT NULL AUTO_INCREMENT,
//            balance double DEFAULT '0.00' NOT NULL,
//            user_id integer NULLABLE,
//            created_at datetime NULLABLE,
//            updated_at datetime NULLABLE,
//            FOREIGN KEY (user_id) REFERENCES '.$wpdb->prefix . 'users(ID) ON DELETE CASCADE,
//            PRIMARY KEY  (id)
//        ) $charset_collate;";
//
//        $transactions = "CREATE TABLE '.$wpdb->prefix . 'smeify_transactions (
//            id mediumint(9) NOT NULL AUTO_INCREMENT,
//            user_id integer NOT NULL,
//            amount double NULLABLE,
//            initial_balance double NULLABLE,
//            final_balance double NULLABLE,
//            type text NULLABLE,
//            status text DEFAULT 'pending' NOT NULL,
//            created_at datetime NULLABLE,
//            updated_at datetime NULLABLE,
//            FOREIGN KEY (user_id) REFERENCES '.$wpdb->prefix . 'users(ID) ON DELETE CASCADE,
//            PRIMARY KEY  (id)
//        ) $charset_collate;";
//
//        $wpdb->query($settings);
//        $wpdb->query($data);
//        $wpdb->query($sas);
//        $wpdb->query($vtu);
//        $wpdb->query($wallet);
//        $wpdb->query($transactions);

        flush_rewrite_rules();
    }
}