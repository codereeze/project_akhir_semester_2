<?php

namespace Libraries;

class View
{
    public string $title = '';

    public function renderView($view, array $params)
    {
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }
        $session = new Response();
        if (!isset($_SESSION['user_id'])) {
            $viewContent = $this->renderViewOnly($view, $params, [], $session);
        } else {
            $dataUser = Auth::user();
            $viewContent = $this->renderViewOnly($view, $params, $dataUser, $session);
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/resources/views/layouts/$layoutName.php";
        $layoutContent = ob_get_clean();
        return str_replace("{{ content }}", $viewContent, $layoutContent);
    }

    public function renderViewOnly($view, array $params, $dataUser, $session)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        if ($dataUser) {
            foreach ($dataUser as $user => $data) {
                $$user = $data;
            }
        }
        
        $session;

        ob_start();
        include_once Application::$ROOT_DIR . "/resources/views/$view.php";
        return ob_get_clean();
    }
}
