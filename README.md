Validator Interceptor

The Validator Interceptor is a package designed to validate incoming requests in a Spiral Framework application before they reach the service layer. Acting as a middleware, it intercepts requests and ensures 
that the required data is validated according to the predefined rules. 

This helps catch invalid data early, providing a cleaner flow and reducing the need for validation checks within your service or controller logic.

Key Features
Automatic Validation: Ensures all incoming requests meet the required criteria.
Easy Configuration: Set up validation rules directly within the package.
Seamless Integration: Designed to work as an interceptor, it fits neatly into Spiral's architecture.

How It Works
download this file and in your composer.json in your project add repository. then use type => path and url is directory of this package.
install with : composer require barsam/validation-spiral

then check in app>config>grpc.php, interceptor is added. if is not added, add like this:
'interceptors' => [
        \Barsam\ValidationSpiral\Interceptor\ValidatorInterceptor::class,
    ],

Now use this validateBy in your service.

This setup allows for a modular approach to request validation in your application.
