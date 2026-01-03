<form method="POST">
    Title: 
    <input type="text" name="title" 
           value="<?= isset($page) ? htmlspecialchars($page->title) : '' ?>"><br>

    Status: 
    <select name="status">
        <option value="draft" <?= (isset($page) && $page->status=='draft') ? 'selected' : '' ?>>Draft</option>
        <option value="published" <?= (isset($page) && $page->status=='published') ? 'selected' : '' ?>>Published</option>
    </select><br>

    Content: 
    <textarea name="content" class="editor"><?= isset($page) ? htmlspecialchars($page->content) : '' ?></textarea><br>

    <button type="submit">Save</button>
</form>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: '.editor',
  height: 300,
  plugins: 'link image code lists',
  toolbar: 'undo redo | bold italic | bullist numlist | link image | code'
});
</script>
