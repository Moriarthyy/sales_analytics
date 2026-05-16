<div class="form-container">
    @include('layout.alertMessages')
    <x-bladewind::card title="Cadastro">

        <form wire:submit="register" class="signup-form">

            <div>
                <x-bladewind::input
                    wire:model.live="name"
                    name="name"
                    type="text"
                    label="Nome"
                />

                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <x-bladewind::input
                    wire:model.live="email"
                    name="email"
                    type="email"
                    label="Email"
                />

                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <x-bladewind::input
                    wire:model.live="password"
                    type="password"
                    viewable="true"
                    name="password"
                    label="Senha"
                />
            </div>

            <div class="mt-4">
                <x-bladewind::input
                    wire:model.live="password_confirmation"
                    type="password"
                    viewable="true"
                    name="password_confirmation"
                    label="Confirmar Senha"
                />
            </div>

            @if($password && $password_confirmation)

                @if($password === $password_confirmation)
                    <div class="text-green-600 mt-2">
                        Senhas coincidem
                    </div>
                @else
                    <div class="text-red-600 mt-2">
                        As senhas estão diferentes
                    </div>
                @endif

            @endif

            @error('password')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
            @enderror

            <div class="text-center mt-4">
                <x-bladewind::button can_submit="true">
                    Registrar
                </x-bladewind::button>
            </div>

        </form>

    </x-bladewind::card>
</div>
