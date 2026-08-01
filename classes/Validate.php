<?php

class Validate
{
    private array $msg;
    public function __construct()
    {
        $this->msg = array();
    }

    public function valid_input(string $data)
    {
        return trim(stripslashes(htmlspecialchars($data)));
    }

    public function valid_email(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function valid_date(string $date, string $format = 'd-m-Y'): bool
    {
        $d = DateTime::createFromFormat($format, $date);
        if ($d !== false) {
            if ($d->format($format) === $date) {
                return true;
            }
        }
        return false;
    }

    public function valid_password(string $password): bool
    {
        if (strlen($password) >= 6 && strlen($password) <= 20) {
            if (preg_match('/\d/', $password) == 1) {
                return true;
            } else {
                array_push($this->msg, "Password must contain at least one number");
            }
        } else {
            array_push($this->msg, 'Password must be between 6 to 20 characters long.');
        }
        return false;
    }

    public function valid_username(string $username): bool
    {
        $username = trim($username);
        if (strlen($username) >= 4) {
            if (preg_match('/\s/', $username)) {
                array_push($this->msg, "Username must not contain spaces");
                return false;
            }
            if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
                array_push($this->msg, "Username may contain only letters, numbers, and underscore");
                return false;
            }
            return true;
        } else {
            array_push($this->msg, "Username must be at least 4 characters long");
        }
        return false;
    }

    public function valid_phone(string $data)
    {
        return preg_match('/^\d{10}$/', $data) === 1;
    }

    public function get_msg(): array
    {
        return $this->msg;
    }
}
