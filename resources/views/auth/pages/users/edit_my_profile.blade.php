<x-auth-layout pageTitle="Update My profile">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <form method="post" action="{{ route('updatemyprofile') }}" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <img src="{{ $data->imageUrl() }}" alt="user profile image" srcset="">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label">First name</label>
                                <x-front.input-field type="text" name="name" id="name"
                                    place="Enter Full Name" val="{{ $data->name }}" required="true" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Last name</label>
                                <x-front.input-field type="text" name="name" id="name"
                                    place="Enter Full Name" val="{{ $data->name }}" required="true" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="email" class="form-label">e-Mail</label>
                                <x-front.input-field type="email" name="email" id="email"
                                    place="Enter your email" val="{{ $data->email }}" extraAttributes="readonly"
                                    required="true" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="username" class="form-label">Username</label>
                                <x-front.input-field type="text" name="username" id="username"
                                    place="Enter your username" val="{{ $data->username }}" required="true" />
                            </div>
                        </div>
                        <div class="row mb-3">

                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <x-front.input-button btnType="submit" btnValue="Update Profile" btnClass="" />
                            </div>
                        </div>
                    </form>
                </x-front.card>
            </div>
        </div>
    </div>

</x-auth-layout>
