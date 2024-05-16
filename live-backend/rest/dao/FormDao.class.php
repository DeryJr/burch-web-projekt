<?php

require_once __DIR__ . "/BaseDao.class.php";

class FormDao extends BaseDao {
    public function __construct() {
        parent::__construct("form_submissions");
    }
    public function add_form_submission($form_submissions) {
        // IMPLEMENT LOGIC
        return $form_submissions;
    }
}