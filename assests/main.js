
function alphanumericOnly(input)
{
    
    var pat = /[^a-z| |,|0-9|.]/gi;
    input.value = input.value.replace(pat,"");
}