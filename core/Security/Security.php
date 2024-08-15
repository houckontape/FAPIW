<?php

namespace Security;

class Security
{
    public function sanitize($data) {
        // TODO Sanitize data to prevent XSS, etc.
    }

    public function validateCSRF($token) {
        // TODO Validate CSRF token
    }

    public function generateCSRFToken() {
        // TODO Generate CSRF token
    }
}