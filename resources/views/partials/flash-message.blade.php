    @if(session()->has('message'))
    <div class="alert alert-success w-25 position-absolute top-50 start-50 translate-middle" role="alert" id="message">
        <span class="text-center">{{ session('message') }}</span>
    </div>
    <script>
        setTimeout(messageIn, 2000);
        function messageIn() {
            $("#message").fadeOut();
            $("#message").fadeOut("slow");
            $("#message").fadeOut(3000);
        }
    </script>
    @endif
