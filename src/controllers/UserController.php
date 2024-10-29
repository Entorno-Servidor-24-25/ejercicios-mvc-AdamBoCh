<?php
require_once BASE_PATH . '/models/User.php';
require_once BASE_PATH . '/db.php';

class UserController {
    // Método para mostrar el formulario
    public function showForm() {
        require_once BASE_PATH . '/views/userForm.php';
    }

    // Método para manejar el guardado de usuario
    public function saveUser() {
        global $connection;

        // Obtener los datos del formulario
        $name = $_POST['name'];

        // Crear un nuevo objeto usuario
        $user = new User($name);

        // Guardar el usuario en la base de datos
        if ($user->save($connection)) {
            require_once BASE_PATH . '/views/userSuccess.php';
        } else {
            echo "Error al guardar el usuario.";
        }
    }

    public function getAllUsers() {
        global $connection;

        $users = User::getAll($connection);

        require_once BASE_PATH . '/views/showUsers.php';
    }

    public function deleteUser() {
        global $connection; 
        $id = $_POST['id'];
    
        if (User::delete($id, $connection)) {
            header("Location: listUsers.php");
            exit;
        } else {
            echo "Error al eliminar el usuario.";
        }
    }
}
?>
