<template>
  <div
    v-if="type == 'signin'"
    class="w-full h-3/4 flex items-center justify-center"
  >
    <div class="lg:w-2/4">
      <div class="py-6 space-x-2 text-center">
        <span
          class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white text-white cursor-pointer"
          >f</span
        >
        <span
          class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white text-white cursor-pointer"
          >G+</span
        >
        <span
          class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white text-white cursor-pointer"
          >in</span
        >
      </div>
      <p class="text-gray-100 text-center">
        or use email your account{{ type }}
      </p>
      <form id="signin" action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
        <div class="pb-2 pt-4">
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
          />
        </div>
        <div class="pb-2 pt-4">
          <input
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
        </div>
        <div
          class="text-right text-gray-400 hover:underline hover:text-gray-100"
        >
          <!-- <a href="#">Forgot your password?</a> -->
          <Link :href="route('login', { type: 'forgotps' })"
            >Forgot your password?</Link
          >
        </div>
        <div class="px-4 pb-2 pt-4">
          <button
            class="uppercase block w-full p-2 text-md rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none"
          >
            sign in
          </button>
        </div>
      </form>
    </div>
  </div>

  <div
    v-if="type == 'signup'"
    class="w-full h-3/4 flex items-center justify-center"
  >
    <div class="lg:w-2/4">
      <div class="py-6 space-x-2 text-center">
        <span
          class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white text-white cursor-pointer"
          >f</span
        >
        <span
          class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white text-white cursor-pointer"
          >G+</span
        >
        <span
          class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white text-white cursor-pointer"
          >in</span
        >
      </div>
      <p class="text-gray-100 text-center">or use email your account</p>
      <form id="signup" action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
        <div class="pb-2 pt-4">
          <input
            type="text"
            name="signupname"
            id="signupname"
            placeholder="Name"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
          />
        </div>
        <div class="pb-2 pt-4">
          <input
            type="email"
            name="signupemail"
            id="signupemail"
            placeholder="Email"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
          />
        </div>
        <div class="pb-2 pt-4">
          <input
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            type="password"
            name="signuppassword"
            id="signuppassword"
            placeholder="Password"
          />
        </div>
        <div class="pb-2 pt-4">
          <input
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            type="password"
            name="confirmpassword"
            id="confirmpassword"
            placeholder="Confirm Password"
          />
        </div>
        <div
          class="text-center text-gray-400 hover:underline hover:text-gray-100"
        >
          <Link :href="route('login', { type: 'signin' })"
            >Already Have An Account? Sign In</Link
          >
        </div>
        <div class="px-4 pb-2 pt-4">
          <button
            class="uppercase block w-full p-2 text-md rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none"
          >
            sign up
          </button>
        </div>
      </form>
    </div>
  </div>

  <div
    v-if="type == 'forgotps'"
    class="w-full h-3/4 flex items-center justify-center"
  >
    <div class="lg:w-2/4">
      <p class="text-gray-100 text-xl text-center pb-2">Forgot password?</p>
      <form id="forgot" action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
        <div class="pb-4 pt-4">
          <input
            type="email"
            name="forgotemail"
            id="forgotemail"
            placeholder="Email"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
          />
        </div>

        <div class="pb-2 pt-4 flex justify-center">
          <button
            class="uppercase block w-3/4 p-1.5 text-md rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none"
          >
            send password reset link
          </button>
        </div>
      </form>
    </div>
  </div>

  <div
    v-if="type == 'resetps'"
    class="w-full h-3/4 flex items-center justify-center"
  >
    <div class="lg:w-2/4">
      <p class="text-gray-100 text-xl text-center">Reset Password</p>
      <form id="resetps" action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
        <div class="pb-2 pt-4">
          <input
            type="email"
            name="resetemail"
            id="resetemail"
            placeholder="Email"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
          />
        </div>
        <div class="pb-2 pt-4">
          <input
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            type="password"
            name="resetpassword"
            id="resetpassword"
            placeholder="New Password"
          />
        </div>
        <div class="pb-2 pt-4">
          <input
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            type="password"
            name="resetconfirmpassword"
            id="resetconfirmpassword"
            placeholder="Confirm Password"
          />
        </div>

        <div class="pb-2 pt-4 flex justify-center">
          <button
            class="uppercase block w-3/4 p-1.5 text-md rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none"
          >
            reset password
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    type: String,
  },
};
</script>
