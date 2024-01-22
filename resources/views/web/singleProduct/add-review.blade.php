<section id="add-review">
    <h2>
        @lang('product.add')
      </h2>
      <form class="review-form" action="{{ route('addReview', $product->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-top">
          <input type="text" name="name" id="numeprenume_review" placeholder="Nume, Prenume" required>
          <input type="text" name="email" id="mail_review" placeholder="Adresa E-mail" required>
          <input type="text" name="phone" id="numeprenume_review" placeholder="Adresa E-mail" required >
        </div>
        <textarea name="text" rows="8" placeholder="Scrie mesajul tău aici" required></textarea>
        <input type="submit" value="__('product.send')">
      </form>
</section>
