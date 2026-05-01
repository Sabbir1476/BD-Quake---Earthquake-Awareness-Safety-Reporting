<?php

class Controller
{
    protected function view($view, $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }

        require VIEW_PATH . '/layouts/header.php';
        require VIEW_PATH . '/' . $view . '.php';
        require VIEW_PATH . '/layouts/footer.php';
    }

    protected function redirect(string $url)
    {
        header("Location: $url");
        exit;
    }

    protected function requireLogin()
    {
        if (empty($_SESSION['user_id'])) {
            $this->redirect(BASE_URL . "/index.php?controller=auth&action=login");
        }
    }

    protected function requireAdmin()
    {
        if (($_SESSION['user_role'] ?? '') !== 'admin') {
            http_response_code(403);
            echo "<h3 style='color:red; text-align:center;'>Access Denied (Admin Only)</h3>";
            exit;
        }
    }
}
