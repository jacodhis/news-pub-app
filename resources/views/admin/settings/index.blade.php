@extends('layouts.admin')

@section('title', 'System Settings')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <h2 class="mb-4">System Settings</h2>

    {{-- Flash Message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Nav Tabs --}}
    <ul class="nav nav-tabs mb-4" id="settingsTab" role="tablist" style="color:black">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                type="button" role="tab" aria-controls="general" aria-selected="true" style="color:black">
                General Settings
            </button>
        </li>

        {{-- <li class="nav-item" role="presentation">
            <button class="nav-link" id="discounts-tab" data-bs-toggle="tab" data-bs-target="#discounts"
                type="button" role="tab" aria-controls="discounts" aria-selected="false">
                Discounts
            </button>
        </li> --}}

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social"
                type="button" role="tab" aria-controls="social" aria-selected="false" style="color:black">
                Social Links
            </button>
        </li>
    </ul>

    {{-- Tab Content --}}
    <div class="tab-content" id="settingsTabContent">

        {{-- General Settings Tab --}}
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
            <form method="POST" action="{{ route('settings.store') }}">
                @csrf
                @foreach ($settings as $setting)
                    <div class="border rounded p-3 mb-3 bg-light">
                        <div class="row align-items-center">
                            <div class="col-md-5 border-end pe-4">
                                @if ($setting->key == 'site_name')
                                    <strong>Site Name</strong>
                                    <p class="text-muted mb-0">Change the name of your website.</p>
                                @elseif ($setting->key == 'admin_email')
                                    <strong>Email To Receive Messages</strong>
                                    <p class="text-muted mb-0">Update the email to receive messages when clients contact you</p>
                                @elseif ($setting->key == 'phone')
                                    <strong>Phone Number to use on Website</strong>
                                    {{-- <p class="text-muted mb-0">Update the email to receive messages when clients contact you</p> --}}

                                @endif
                            </div>

                            <div class="col-md-7">
                                @if ($setting->key == 'site_name')
                                    <input type="text" name="settings[site_name]" value="{{ $setting->value }}"
                                        class="form-control" placeholder="Enter site name">
                                @elseif ($setting->key == 'admin_email')
                                    <input type="email" name="settings[admin_email]" value="{{ $setting->value }}"
                                        class="form-control" placeholder="Enter admin email">
                                @elseif ($setting->key == 'phone')
                                    <input type="number" name="settings[phone]" value="{{ $setting->value }}"
                                        class="form-control" placeholder="Enter Phone Number">

                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-primary">Save General Settings</button>
                </div>
            </form>
        </div>



        {{-- Social Links Tab --}}
        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
            <form method="POST" action="{{ route('social-links.store') }}">
                @csrf
                <div class="border rounded p-3 mb-3 bg-light">
                    @foreach ($socialLinks as $socialLink)
                        <div class="mb-3">
                            <label for="{{ $socialLink->platform }}" class="form-label">
                                {{ ucfirst($socialLink->platform) }} URL <small class="text-muted">(optional)</small>
                            </label>
                            <input type="url" name="social[{{ $socialLink->platform }}]"
                                id="{{ $socialLink->platform }}" value="{{ $socialLink->url ?? '' }}"
                                class="form-control"
                                placeholder="https://{{ strtolower($socialLink->platform) }}.com/yourprofile">
                        </div>
                    @endforeach
                </div>
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary">Save Social Links</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
