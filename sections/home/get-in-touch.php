<section
  id="get-in-touch-section"
  class="w-full relative min-h-[200px] py-[115px] px-[10px] min-[450px]:px-[50px] min-[1300px]:px-[135px]">
  <div class="absolute bg-black/70 top-0 left-0 w-full h-full"></div>
  <img src="assets/images/contact-bg.png" alt="Contact Background"
    class="w-full h-full object-cover object-center absolute top-0 left-0 -z-10" />
  <div
    id="get-in-touch"

    class=" opacity-0 -translate-y-10 transition-all duration-1000 grid grid-cols-1 min-[1060px]:grid-cols-2 items-center gap-12 min-[1060px]:gap-4 relative">
    <div class="flex flex-col gap-4 max-w-[487px] min-[1060px]:mx-auto">
      <p class="text-caption text-primary-500">Get in Touch</p>
      <p class="text-heading text-white">
        We’d love to <span class="text-primary-500">hear</span> from you!
      </p>
      <p
        class="text-white text-justify text-[16px] md:text-[18px] leading-[35px]">
        Please fill out the form, and we will get back to you as soon as
        possible during regular business hours to confirm your preferred dates &
        times.
      </p>
    </div>
    <div
      class="bg-white py-[70px] px-[20px] min-[400px]:px-[48px] w-full h-full rounded-tr-[50px] border-l-[4px] border-l-primary-500">
      <form class="grid grid-cols-1 min-[570px]:grid-cols-2 gap-6"
        action="contact-send.php" method="POST">
        <input
          type="text"
          name="name"
          class="input-text col-span-2 min-[570px]:col-span-1"
          placeholder="Name: " />

        <input
          type="text"
          name="phone"
          class="input-text col-span-2 min-[570px]:col-span-1"
          placeholder="Phone: " />
        <input
          type="email"
          name="email"
          class="input-text col-span-2 min-[570px]:col-span-1"
          placeholder="Email: " />

        <input
          type="text"
          name="address"
          class="input-text col-span-2 min-[570px]:col-span-1"
          placeholder="Address: " />
        <textarea
          name="message"
          class="input-text col-span-2 min-h-[110px]"
          placeholder="Message: "></textarea>
        <button
          class="rounded-md bg-gradient-to-b from-[#168BFF] to-[#167ADD] text-white h-[40px] col-span-2 hover:from-[#167ADD] hover:to-[#168BFF] active:scale-[0.98] active:brightness-90 transition-all">
          Send now
        </button>
      </form>
    </div>
  </div>
</section>