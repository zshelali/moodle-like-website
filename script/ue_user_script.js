$(document).ready(function () {
  const tagBox = $('#tagBox');
  const dropdown = $('#dropdown');
  const hiddenInput = $('#selectedValues');
  let selected = [];

  tagBox.on('click', function () {
    dropdown.toggle();
  });

  dropdown.on('click', 'div', function () {
    const value = $(this).data('value');

    if (!selected.includes(value)) {
      selected.push(value);

      // Add tag
      const tag = $(`<span class="tag" data-value="${value}">${value}<span class="remove">&times;</span></span>`);
      
      // Tag removal handler
      tag.find('.remove').on('click', function () {
        tag.remove();
        selected = selected.filter(v => v !== value);
        hiddenInput.val(selected.join(','));

        // Restore to dropdown
        dropdown.append(`<div data-value="${value}">${value}</div>`);
      });

      tagBox.append(tag);
      hiddenInput.val(selected.join(','));

      // Remove from dropdown
      $(this).remove();
    }

    dropdown.hide();
  });

  // Hide dropdown when clicking outside
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.multiselect-container').length) {
      dropdown.hide();
    }
  });
});
