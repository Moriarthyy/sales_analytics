<html>
    <link rel="stylesheet" href=" {{asset('css/login/login.css')}} ">
    @include('layout.bladewindImport')
    @include('layout.alertMessages')
    <body>
        <div class="form-container">
            <x-bladewind::card title="Login">
                <div class="form-card">
                    <form class="signup-form" action="" method="post">
                        <div>
                            <x-bladewind::input
                            name="email"
                            type="email"
                            required="true"
                            label="Email"
                            />
                        </div>
                        <div>
                            <x-bladewind::input
                            type="password"
                            viewable="true"
                            required="true"
                            name="password"
                            label="senha"
                            />
                        </div>
                        <div class="text-center">
                            <x-bladewind::button can_submit="true" name="loginBtn" >Login</x-bladewind::button>
                        </div>
                    </form>
                </x-bladewind::card>
            </div>
        </div>
    </body>
</html>
