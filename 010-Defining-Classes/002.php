<form method="post">
    <label for="username">Username: </label><input type="text" name="username" id="username"/><br>
    <label for="password">Password: </label><input type="password" name="password" id="password"/><br>
    <input type="submit" name="register" value="Register"><br>
</form>

<?php

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $person = new Person($username, $password);
    echo $person;
}

class Person
{
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function __toString(): string
    {
        return $this->getUsername() . "<br />" . $this->getPassword();
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}