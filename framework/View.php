<?php

namespace Framework;

class View
{
    public string $title = '';

    public function renderView($view, array $params)
    {
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }
        if (!isset($_SESSION['user_id'])) {
            $viewContent = $this->renderViewOnly($view, $params, []);
        } else {
            $dataUser = Auth::user();
            $viewContent = $this->renderViewOnly($view, $params, $dataUser);
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/resources/views/layouts/$layoutName.php";
        $layoutContent = ob_get_clean();
        return str_replace("{{ content }}", $viewContent, $layoutContent);
    }

    public function renderViewOnly($view, array $params, array $dataUser)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        if ($dataUser) {
            foreach ($dataUser as $user => $data) {
                $$user = $data;
            }
        }

        ob_start();
        include_once Application::$ROOT_DIR . "/resources/views/$view.php";
        return ob_get_clean();
    }
}
