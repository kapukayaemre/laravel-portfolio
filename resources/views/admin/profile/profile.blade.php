@extends('admin.layouts.layout')
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="page-description page-description-tabbed">
                            <h1>Profil Ayarları</h1>

                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="hoaccountme" aria-selected="true">Profil</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">Güvenlik</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="integrations-tab" data-bs-toggle="tab" data-bs-target="#integrations" type="button" role="tab" aria-controls="integrations" aria-selected="false">Bağlantılar</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                <form action="{{ route('profile.update') }}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="settingsInputEmail" class="form-label">E-posta Adresi</label>
                                                    <input type="email" class="form-control" name="email" id="settingsInputEmail" aria-describedby="settingsEmailHelp" placeholder="example@neptune.com" value="{{ old('email', $user->email) }}">
                                                    @if($errors->has('email'))
                                                        <code>{{ $errors->first('email') }}</code>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="settingsPhoneNumber" class="form-label">Telefon</label>
                                                    <input type="text" class="form-control" name="phone" id="settingsPhoneNumber" placeholder="(xxx) xxx-xxxx" value="{{ old('phone', $user->phone) }}">
                                                    @if($errors->has('phone'))
                                                        <code>{{ $errors->first('phone') }}</code>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row m-t-lg">
                                                <div class="col-md-6">
                                                    <label for="settingsInputFirstName" class="form-label">İsim</label>
                                                    <input type="text" class="form-control" name="first_name" id="settingsInputFirstName" placeholder="John" value="{{ old('first_name', $user->first_name) }}">
                                                    @if($errors->has('first_name'))
                                                        <code>{{ $errors->first('first_name') }}</code>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="settingsInputLastName" class="form-label">Soyisim</label>
                                                    <input type="text" class="form-control" name="last_name" id="settingsInputLastName" placeholder="Doe" value="{{ old('last_name', $user->last_name) }}">
                                                    @if($errors->has('last_name'))
                                                        <code>{{ $errors->first('last_name') }}</code>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row m-t-lg">
                                                <div class="col">
                                                    <label for="settingsAbout" class="form-label">Hakkında</label>
                                                    <textarea class="form-control" name="about" id="settingsAbout" maxlength="500" rows="4" aria-describedby="settingsAboutHelp">{{ old('about', $user->about) }}</textarea>
                                                    @if($errors->has('about'))
                                                        <code>{{ $errors->first('about') }}</code>
                                                    @endif
                                                    <div id="emailHelp" class="form-text">Kendinizi kısaca özetleyin. (max: 500 karakter)</div>
                                                </div>
                                            </div>
                                            <div class="row m-t-lg">
                                                <div class="col">
                                                    <button type="submit" class="btn btn-primary m-t-sm">Güncelle</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                <form action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row m-t-xxl">
                                                <div class="col-md-12">
                                                    <label for="settingsCurrentPassword" class="form-label">Mevcut Parola</label>
                                                    <input type="password" class="form-control" name="current_password" aria-describedby="settingsCurrentPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                                    @if($errors->updatePassword->has('current_password'))
                                                        <code>{{ $errors->updatePassword->first('current_password') }}</code>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row m-t-xxl">
                                                <div class="col-md-12">
                                                    <label for="settingsNewPassword" class="form-label">Yeni Parola</label>
                                                    <input type="password" class="form-control" name="password" aria-describedby="settingsNewPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                                    @if($errors->updatePassword->has('password'))
                                                        <code>{{ $errors->updatePassword->first('password') }}</code>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row m-t-xxl">
                                                <div class="col-md-12">
                                                    <label for="settingsConfirmPassword" class="form-label">Yeni Parolayı Tekrarla</label>
                                                    <input type="password" class="form-control" name="password_confirmation" aria-describedby="settingsConfirmPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                                    @if($errors->updatePassword->has('password_confirmation'))
                                                        <code>{{ $errors->updatePassword->first('password_confirmation') }}</code>
                                                    @endif
                                                </div>
                                            </div>
                                            {{--<div class="row m-t-xxl">
                                                <div class="col-md-6">
                                                    <label for="settingsSmsCode" class="form-label">SMS Code</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" aria-describedby="settingsSmsCode" placeholder="&#9679;&#9679;&#9679;&#9679;">
                                                        <button class="btn btn-primary btn-style-light" id="settingsResentSmsCode">Resend</button>
                                                    </div>
                                                    <div id="settingsSmsCode" class="form-text">Code will be sent to the phone number from your account.</div>
                                                </div>
                                            </div>--}}
                                            <div class="row m-t-lg">
                                                <div class="col">
                                                    {{--<div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="settingsPasswordLogout" checked>
                                                        <label class="form-check-label" for="settingsPasswordLogout">
                                                            Log out from all current sessions
                                                        </label>
                                                    </div>--}}
                                                    <button type="submit" class="btn btn-primary m-t-sm">Şifreyi Güncelle</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="integrations" role="tabpanel" aria-labelledby="integrations-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="settings-integrations">
                                            <div class="settings-integrations-item">
                                                <div class="settings-integrations-item-info">
                                                    <img src="../../assets/images/icons/jira_software.png" alt="">
                                                    <span>Plan, track, and manage your agile and software development projects in Jira.</span>
                                                </div>
                                                <div class="settings-integrations-item-switcher">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input form-control-md" type="checkbox" id="settingsIntegrationOneSwitcher" checked>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="settings-integrations-item">
                                                <div class="settings-integrations-item-info">
                                                    <img src="../../assets/images/icons/confluence.png" alt="">
                                                    <span>Build, organize, and collaborate on work in one place from virtually anywhere.</span>
                                                </div>
                                                <div class="settings-integrations-item-switcher">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input form-control-md" type="checkbox" id="settingsIntegrationTwoSwitcher" checked>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="settings-integrations-item">
                                                <div class="settings-integrations-item-info">
                                                    <img src="../../assets/images/icons/bitbucket.png" alt="">
                                                    <span>Build, test, and deploy with unlimited private or public space with Bitbucket.</span>
                                                </div>
                                                <div class="settings-integrations-item-switcher">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input form-control-md" type="checkbox" id="settingsIntegrationThreeSwitcher">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="settings-integrations-item">
                                                <div class="settings-integrations-item-info">
                                                    <img src="../../assets/images/icons/sourcetree.png" alt="">
                                                    <span>A Git GUI that offers a visual representation of your repositories.</span>
                                                </div>
                                                <div class="settings-integrations-item-switcher">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input form-control-md" type="checkbox" id="settingsIntegrationFourSwitcher">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
