import './bootstrap';
import $ from 'jquery';

$('.find').on('click', () => {
    let category = $('#category').find(":selected");
    let value = $('#search').val();

    if (
        $(`.selected[data-value='${value}'][data-category='${category.val()}']`).length
        || value == ''
    ) {
        return;
    }
    
    $('#search').val('');

    addSelected(value, category);
})

$(document).ready(function() {
    let urlParams = new URLSearchParams(window.location.search);
    let properties = JSON.parse(urlParams.get('properties'));

    Object.keys(properties).forEach(categoryId => {
        properties[categoryId].forEach(value => {
            addSelected(value, categoryId);
        })
    });
})

$('.submit').on('click', () => {
    let selected = $('.selected');
    let properties = {};

    selected.each((_, el) => {
        category = parseInt($(el).attr('data-category'));

        if (properties[category]) {
            properties[category].push($(el).attr('data-value'));
        } else {
            properties[category] = [$(el).attr('data-value')];
        }
    })

    let query = '?properties=' + JSON.stringify(properties);

    location.href = window.location.href.split('?')[0] + query;
})
 
function addSelected(value, category) {
    if (typeof category == 'string') {
        category = $(`#category [value="${category}"]`);
    }

    $('.search').prepend(`
        <div class='selected' data-value='${value}' data-category='${category.val()}'>
            ${category.text()}: ${value}
        </div>
    `);

    $('.selected').on('click', (el) => {
        el.target.remove();
    });
}