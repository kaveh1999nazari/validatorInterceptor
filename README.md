<h1>Validator Interceptor</h1>

<p>
    <strong>Validator Interceptor</strong> is a powerful request validation package tailored for the <strong>Spiral Framework</strong>. Acting as middleware, it validates incoming requests before they reach the service layer. By catching invalid data early, it streamlines the flow and minimizes the need for redundant validation within your service or controller logic.
</p>

<h2>Key Features</h2>
<ul>
    <li><strong>Automatic Validation:</strong> Ensures all incoming requests meet specified criteria, seamlessly integrating data integrity into your application’s flow.</li>
    <li><strong>Configurable Rules:</strong> Define validation rules easily within the package to suit your application’s needs.</li>
    <li><strong>Seamless Integration:</strong> Designed as an interceptor, it integrates smoothly with Spiral’s architecture without disrupting the framework's structure.</li>
</ul>

<h2>Installation and Setup</h2>

<ol>
    <li>
        <strong>Download the Package:</strong> Place the package files within your project’s directory.
    </li>
    <li>
        <strong>Add to composer.json:</strong>
        <p>In your <code>composer.json</code>, add the repository:</p>
        <pre><code>{
    "repositories": [
        {
            "type": "path",
            "url": "&lt;directory-path-to-this-package&gt;"
        }
    ]
}</code></pre>
        <p>Then, install the package using Composer:</p>
        <pre><code>composer require barsam/validation-spiral</code></pre>
    </li>
    <li>
        <strong>Configure Interceptor in grpc.php:</strong>
        <p>Open <code>app/config/grpc.php</code> and ensure the <code>ValidatorInterceptor</code> is added to the <code>interceptors</code> array. If it’s not present, add it as follows:</p>
        <pre><code>'interceptors' => [
    \Barsam\ValidationSpiral\Interceptor\ValidatorInterceptor::class,
],</code></pre>
    </li>
    <li>
        <strong>Use validateBy in Services:</strong>
        <p>Now, you can implement validation using <code>validateBy</code> within your services, ensuring all incoming data adheres to defined rules before processing.</p>
    </li>
</ol>

<p>
    With this setup, the Validator Interceptor offers a modular and easy-to-manage solution for handling request validation in Spiral applications. This approach enforces data integrity and keeps your code clean by decoupling validation logic from the service and controller layers.
</p>
