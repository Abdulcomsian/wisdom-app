@hasrole('customer')
    <x-user.pages.dashboard />
@endhasrole
@hasrole('admin')
    <x-auth-layout pageTitle="Dashboard">
        <x-admin.pages.dashboard />
    </x-auth-layout>
@endhasrole
