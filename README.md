# faker-php

This library is made to generate fake data, the data generated is random if there is data that is the same as the original data I am not responsible for that data.

##### Return data
- Fullname
- Username
- Email
- Password
- Date of birth
- Gender
- Phone ( +62 )
- IP
- Address
- User Agent
- Postal code


#### Usage
```
use Rdhoni\FakerPhp\Faker;

$fake = new Faker();

var_dump($fake->json())

/// or

var_dump($fake->generate())


```





