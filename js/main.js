// console.log('Connected!');

// Adding Custom HTML for curvy lines in about Section
var rightOutlineHTML = `<div class="curl curl-right">
<div class="strand strand1"></div>
<div class="strand strand2"></div>
<div class="strand strand3"></div>
<div class="strand strand4"></div>
<div class="strand strand5"></div>
<div class="strand strand6"></div>
<div class="strand strand7"></div>
<div class="strand strand8"></div>
<div class="strand strand9"></div>
<div class="strand strand10"></div>
<div class="strand strand11"></div>
<div class="strand strand12"></div>
<div class="strand strand13"></div>
<div class="strand strand14"></div>
<div class="strand strand15"></div>
</div>`;

$(".about-section").before(rightOutlineHTML);


// Adding Custom HTML for curvy lines in team Section
var leftOutlineHTML = `<div class="curl curl-left">
<div class="strand strand1"></div>
<div class="strand strand2"></div>
<div class="strand strand3"></div>
<div class="strand strand4"></div>
<div class="strand strand5"></div>
<div class="strand strand6"></div>
<div class="strand strand7"></div>
<div class="strand strand8"></div>
<div class="strand strand9"></div>
<div class="strand strand10"></div>
<div class="strand strand11"></div>
<div class="strand strand12"></div>
<div class="strand strand13"></div>
<div class="strand strand14"></div>
<div class="strand strand15"></div>
</div>`;

$(".team-section").before(leftOutlineHTML);


// It's added because Testimonial slider conflicting with team section and adding extra p tag in that.
// $('.team-section').next('p').remove();
// $('.team-member').next('p').remove();
$('p').each(function(){ // For each element
    if( $(this).text().trim() === '' )
        $(this).remove();
});