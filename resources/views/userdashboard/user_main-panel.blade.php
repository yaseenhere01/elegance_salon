<div class="main-panel">
          <div class="content-wrapper">

            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Profile') }}
                </h2>
            </x-slot>

            <div class="container my-5">
                <div class="d-flex align-items-center mb-4">
                    <!-- <img src="{{ Auth::user()->profile_image ?? 'profile.jpg' }}" alt="Profile Image" class="profile-image me-3"> -->
                    <div>
                        <h3 class="text-dark">{{ Auth::user()->name }}</h3>
                        <p class="text-dark">{{ Auth::user()->email }}</p>
                        <div>
                            {{-- <a href="/userdashboard.user_dashboard" class="btn btn-primary">Dashboard</a> --}}
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Log Out</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl text-dark mx-auto py-10 sm:px-6 lg:px-8">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')
                        <x-section-border />
                    @endif

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>
                        <x-section-border />
                    @endif

                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>
                        <x-section-border />
                    @endif



                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-section-border />
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif
                </div>
            </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Elegance_Salon 2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="" target="_blank">Team Salon Management</a> </span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

