<?php

require_once __DIR__ . "/../dao/FormDao.class.php";

class FormService {
    private $form_submissions_dao;
    public function __construct() {
        $this->form_submissions_dao = new FormSubmissionDao();
    }
    public function add_form($form_submissions) {
        return $this->form_submissions_dao->add_form($form_submissions);
    }
}