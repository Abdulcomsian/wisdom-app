<x-guest-layout pageTitle="Login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="row row-cols-1 row-cols-md-3">
                        @foreach ($plans as $plan)
                            <div class="col mb-4">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title text-center col-form-label">{{ $plan->name }}</h5>
                                        <h6 class="card-subtitle col-form-label mt-3" style="margin-left: 20%;">
                                            ${{ $plan->price }} only
                                        </h6>
                                        <div class="mt-auto">
                                            <form action="{{ route('subscribe') }}" method="POST"
                                                onsubmit="showSpinner(this)">
                                                @csrf
                                                <div>
                                                    <label><strong>Select Categories:</strong></label>
                                                    <div class="form-group">
                                                        @foreach ($categories as $category)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="categories[]" value="{{ $category->id }}"
                                                                    id="category_{{ $category->id }}">
                                                                <label class="form-check-label"
                                                                    for="category_{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Select
                                                    <span class="spinner-grow spinner-grow-sm d-none" role="status"
                                                        aria-hidden="true"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<script>
    function showSpinner(form) {
        var button = form.querySelector('button[type="submit"]');
        button.disabled = true;
        var spinner = button.querySelector('.spinner-grow');
        spinner.style.display = 'inline-block';

        form.submit();
    }
</script>
