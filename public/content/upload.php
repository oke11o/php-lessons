<section class="taskCard taskCard_width">
  <h2 class="taskCard__title">Форма загрузки файлов в галлерею</h2>

  <form name ="upload_form" class="upload" method="post" enctype="multipart/form-data">
    <div class="upload__section">
      <label for="upload_type">Идентификатор: <code>*</code></label>
      <input type="text" name="upload_type" class="upload__input" required>
    </div>

    <div class="upload__section">
      <label for="upload_name">Название: <code>*</code></label>
      <input type="text" name="upload_name" class="upload__input" required>
    </div>

    <div class="upload__section">
      <label for="upload_description">Описание:</label>
      <textarea name="upload_description" class="upload__textarea"></textarea>
    </div>

    <div class="upload__section">
      <label for="upload_file">Файл: <code>*</code> <code class="codeComment">(максимальный размер 1024 кб)</code></label>
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> <!-- 1048576 b = 1024 kb-->
      <input name="upload-image" type="file" class="upload__file" required accept="image/*">
    </div>

    <div class="upload__buttons">
      <button type="submit" class="functionButton">отправить</button>
      <button type="reset" class="functionButton">отмена</button>
    </div>
  </form>
</section>