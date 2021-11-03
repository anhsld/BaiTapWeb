// Tinh tong S= 1+...+n
function Sum(n){
    if (n>0) return n+Sum(n-1)
    else return n;
}
var n=5;n
document.writeln (" Tong S= 1+...+n= "+Sum(5))
// Sap xep ba so tang dan 
// Tinh tong cac phan tu cuar mang
// Tach xau ho va ten