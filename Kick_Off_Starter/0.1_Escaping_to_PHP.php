<?php 
  /**
   * Kỹ thuật `Escaping to PHP`
   * PHP Parser cần một cách để phân biệt PHP code với các phần tử khác trong trang. Kỹ thuật thực hiện điều này được biết với cái tên: "Escaping to PHP". Có 4 cách để làm điều này:
   * 
   * - Thẻ PHP chính tắc
   * <?php ... ?> 
   * Nếu sử dụng phong cách này, bạn chắc chắn rằng các thẻ của bạn sẽ luôn luôn được thông dịch một cách chính xác.
   *  
   * - Thẻ mở ngắn gọn(SGML-style)
   * Các thẻ này có dạng như sau:
   * <?...?>
   *  Để sử dụng thẻ này bạn thực hiện 1 hoặc 2 việc sau để kích hoạt hoạt PHP để nhận ra các thẻ này:
   * Chọn tùy chọn cấu hình --enable-short-tags khi bạn đang xây dựng PHP.
   * Thiết lập cài đặt short_open_tag trong tệp php.ini thành on. Tùy chọn này phải vô hiệu hóa để phân tích cú pháp XML với PHP, bởi vì cú pháp tương tự được sử dụng cho các thẻ XML.
   * 
   * - Thẻ ASP-style 
   * Thẻ ASP-style bắt chước các thẻ được sử dụng bởi Active Server Pages để phác họa các khối code. Các thẻ ASP-style có dạng như sau: 
   * <%...%>
   * Để sử dụng thẻ ASP-style, bạn sẽ cần thiết lập tùy chọn cấu hình trong tệp php.ini.
   * 
   * Thẻ HTML script 
   * Thẻ script trong HTML có dạng như sau:
   * <script language="PHP">...</script>
   */
?>