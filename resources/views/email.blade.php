{{-- Contact Section Start --}}
<section id="contact" class="pt-36 pb-32 dark:bg-slate-700">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Contact Me</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Hubungi Saya</h2>
                <p class="font-medium text-md text-secondary dark:text-slate-400">Anda bisa menghubungi saya lewat email, tapi ini masih belum disambungkan kepada gmail pribadi saya, untuk lebih lanjut anda bisa mengklik hubungi saya dibagian beranda.</p>
            </div>
        </div>
          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
        <form action="{{ route('send.email') }}" method="post">
          @csrf
          
          <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <label for="email" class="text-base font-bold text-primary">Email</label>
                <input type="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Enter Email">
                @error('email')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
          </div>

          <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
            <label for="subject" class="text-base font-bold text-primary">Subject</label>
            <input type="subject" name="subject" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Enter Subject">
                @error('subject')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
          </div>

          <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <strong class="text-base font-bold text-primary">Pesan</strong>
                <textarea name="content" rows="5" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Enter Your Message"></textarea>
                @error('content')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
          </div>
            <div class="w-full px-4 lg:w-2/3 lg:mx-auto">
                <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-70 hover:shadow-lg transition duration-500">Kirim</button>
            </div>
        </form>
    </div>
</section>
{{-- Contact Section End --}}