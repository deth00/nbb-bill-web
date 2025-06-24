<div>
    @if (empty($username))
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('login/images/logoprint.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <h1 style="font-family: 'Phetsarath OT';"> <strong>ລະບົບແບບພິມ ເອກະສານ ທນບ</strong></h1>
                            <p class="mb-4" style="font-size: 20px;font-family: 'Phetsarath OT';">ລະບົບແບບພິມ ເອກະສານ
                                ທນບ
                            </p>
                        </div>
                        <div class="form-group first">
                            <label for="username">
                                <h5 class="phetsarath-font">ອີເມວ</h5>
                            </label>
                            <input type="email"
                                class="form-control phetsarath-font @error('username') is-invalid @enderror"
                                id="username" wire:model="username" wire:keydown.enter="login">
                            @error('username')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group last mb-4">
                            <label for="password">
                                <h5 class="phetsarath-font">ລະຫັດຜ່ານ</h5>
                            </label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" wire:model="password" wire:keydown.enter="login">
                            @error('password')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <buttom type="submit" class="btn text-white btn-block btn-primary" wire:click="login">
                            <h5 class="phetsarath-font p-2">ເຂົ້າລະບົບ</h5>
                        </buttom>
                    </div>
                </div>
            </div>
        </div>
    @else
    @endif




</div>

@push('scripts')
    <script>
        window.addEventListener('message', async (event) => {
            const allowedOrigins = ['https://doc.nbb.com.la'];
            if (!allowedOrigins.includes(event.origin)) {
                console.warn('Blocked message from:', event.origin);
                return;
            }
            // console.log('event:', event);
            const token = event.data.token;
            const id = event.data.id;
            console.log('Token received:', token);
            console.log('ID received:', id);
            if (!token) return;

            localStorage.setItem('auth_token', token);
            localStorage.setItem('id', id);

            // ✅ Send token to backend to login
            const res = await fetch('/auth-token-login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    token,
                    id
                })
            });
            // console.log('res:', token);

            if (res.ok) {
                const data = await res.json();
                // console.log('User authenticated:', data);
                // console.log('User authenticated:', data.message);
                window.location.href = '/dashboard'; // redirect
            } else {
                console.error('Token login failed');
            }
        });

        // ✅ On page load: try auto-login if token is in localStorage
        window.addEventListener('DOMContentLoaded', async () => {
            const token = localStorage.getItem('auth_token');
            const id = localStorage.getItem('id');
            if (token) {
                const res = await fetch('/auth-token-login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        token,
                        id
                    })
                });

                if (res.ok) {
                    window.location.href = '/dashboard';
                }
            }
        });
    </script>
@endpush
