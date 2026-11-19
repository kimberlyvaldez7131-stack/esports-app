<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - E-Sports</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 min-h-screen flex items-center justify-center">

    <div class="bg-slate-900 w-full max-w-md p-8 rounded-lg shadow-lg border border-slate-800">

        <h1 class="text-2xl font-bold text-white mb-2">
            Create Account
        </h1>

        <p class="text-white mb-6">
            Register to access the E-Sports system
        </p>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-sm text-white font-medium mb-2">
                    Full Name
                </label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your full name"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-white font-medium mb-2">
                    Email Address
                </label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-white font-medium mb-2">
                    Password
                </label>
                <input type="password" name="password" placeholder="Enter your password"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm text-white font-medium mb-2">
                    Confirm Password
                </label>
                <input type="password" name="password_confirmation" placeholder="Confirm your password"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <button type="submit" onclick="
                    this.disabled = true;
                    this.innerText = 'Registering...';
                    this.form.submit();
                "
                class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 disabled:opacity-60 disabled:cursor-not-allowed">
                Register
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-700 font-medium">
                Login here
            </a>
        </p>

    </div>

</body>

</html>