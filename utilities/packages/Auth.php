<?php 
// Class definition for the authentication service.
// It is responsible for signing and verifying jwt tokens,
class Auth 
{

    function __construct(array $data, string $secret = Config::values['auth_secret'], string $expiry = Config::values['auth_token_validity'])
    {
        
    }
}

?>