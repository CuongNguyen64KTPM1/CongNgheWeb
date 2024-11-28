<?php
    session_start();

    if (!isset($_SESSION['flowers'])) {
        $_SESSION['flowers'] = [
            [
                "name" => "Hoa dạ yến thảo",
                "description" => "Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.",
                "image" => "image/hoa-1.jpg"
            ],
            [
                "name" => "Hoa giấy",
                "description" => "Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta, thích hợp với nhiều điều kiện sống khác nhau nên rất dễ trồng, không tốn quá nhiều công chăm sóc nhưng thành quả mang lại sẽ khiến bạn vô cùng hài lòng. Hoa giấy mỏng manh nhưng rất lâu tàn, với nhiều màu như trắng, xanh, đỏ, hồng, tím, vàng… cùng nhiều sắc độ khác nhau. Vào mùa khô hanh, hoa vẫn tươi sáng trên cây khiến ngôi nhà luôn luôn bừng sáng.",
                "image" => "image/hoa-3.jpg"
            ],
            [
                "name" => "Hoa hồng đỏ",
                "description" => "Hoa hồng đỏ biểu tượng cho tình yêu và đam mê. Đây là loại hoa được ưa chuộng nhất để trồng làm cảnh, làm quà tặng hoặc trang trí trong các sự kiện đặc biệt.",
                "image" => "image/hoa-2.jpg"
            ],
            [
                "name" => "Hoa thanh tú",
                "description" => "Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng của hoa thanh tú có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm. Cây khá dễ trồng, lại nở nhiều hoa cùng một lúc, từ một bụi nhỏ có thể đâm nhánh, tạo nên những cây con phát triển sum suê. Thanh tú trồng ở nơi có nắng sẽ ra hoa nhiều, vì thế thích hợp trong cả mùa xuân lẫn mùa hè, đem lại khoảng không gian xanh mát cho ngôi nhà ngày oi nóng.",
                "image" => "image/hoa-4.jpg"
            ],
            [
                "name" => "Hoa đèn lồng",
                "description" => "Giống như tên gọi, hoa đèn lồng có vẻ đẹp giống như chiếc đèn lồng đỏ trên cao. Nếu giàu trí tưởng tượng hơn, chúng ta sẽ hình dung hoa khi nụ đổ xuống thành từng chùm, kết năm kết ba như những thiếu nữ xúng xính trong chiếc đầm dạ hội. Hoa đèn lồng còn có tên là hồng đăng hoa, trồng trong chậu treo, bồn, phên dậu,… gieo hạt vào mùa xuân và cho hoa quanh năm.",
                "image" => "image/hoa-5.jpg"
            ],
            [
                "name" => "Hoa cẩm chướng",
                "description" => "Cẩm chướng là loại hoa thích hợp trồng vào dịp xuân - hè, nếu tiết trời không quá lạnh có thể kéo dài đến tận mùa đông. Hoa có phần thân mảnh, các đốt ngắn mang lá kép cùng nhiều màu sắc như hồng, vàng, đỏ, tím,… thậm chí có thể pha lẫn màu để tạo nên đường viền xinh xắn. Đặt một chậu hoa cẩm chướng trên bàn sẽ khiến căn phòng của bạn đẹp mắt hơn rất nhiều.",
                "image" => "image/hoa-6.jpg"
            ],
            [
                "name" => "Hoa huỳnh anh",
                "description" => "Nếu bạn đang đi tìm một loài hoa tô điểm cho khu vực ban công hoặc hàng rào ngôi nhà thì huỳnh anh là một lựa chọn thích hợp trong mùa này hơn cả. Hoa có màu vàng rực, hình dạng như chiếc kèn be bé inh xinh, lại dễ trồng, mọc nhanh, vươn cao… Huỳnh Anh rất thích nắng, ánh nắng giúp hoa tỏa sáng rực rỡ, nếu ở nơi bóng râm thì chúng sẽ nhạt màu, kém sắc.",
                "image" => "image/hoa-7.jpg"
            ],
            [
                "name" => "Hoa Păng-xê",
                "description" => "Vào mỗi độ tháng 4 về là dịp mà loài hoa Phăng-xê nở rộ vô cùng đẹp mắt. Hoa còn được gọi tên là hay hoa bướm, hoa tử la lan, hoa tương tư,… Păng-xê thường được trồng trong chậu nhỏ, với phần cánh mỏng mượt như nhung, hình dạng cánh bướm mềm mại như đang tung tăng nhảy múa mỗi khi có làn gió thổi qua. Đây cũng là loài hoa tinh tế và sức sống bền bỉ. ",
                "image" => "image/hoa-8.jpg"
            ],
            [
                "name" => "Hoa sen",
                "description" => "Vào mỗi độ tháng 4 về là dịp mà loài hoa Phăng-xê nở rộ vô cùng đẹp mắt. Hoa còn được gọi tên là hay hoa bướm, hoa tử la lan, hoa tương tư,… Păng-xê thường được trồng trong chậu nhỏ, với phần cánh mỏng mượt như nhung, hình dạng cánh bướm mềm mại như đang tung tăng nhảy múa mỗi khi có làn gió thổi qua. Đây cũng là loài hoa tinh tế và sức sống bền bỉ. ",
                "image" => "image/hoa-9.jpg"
            ],
            [
                "name" => "Hoa dừa cạn",
                "description" => "Hoa hồng đỏ biểu tượng cho tình yêu và đam mê. Đây là loại hoa được ưa chuộng nhất để trồng làm cảnh, làm quà tặng hoặc trang trí trong các sự kiện đặc biệt.",
                "image" => "image/hoa-10.jpg"
            ],
            [
                "name" => "Hoa sử quân tử",
                "description" => "Hoa hồng đỏ biểu tượng cho tình yêu và đam mê. Đây là loại hoa được ưa chuộng nhất để trồng làm cảnh, làm quà tặng hoặc trang trí trong các sự kiện đặc biệt.",
                "image" => "image/hoa-11.jpg"
            ],
            [
                "name" => "Cúc lá nho",
                "description" => "Hoa hồng đỏ biểu tượng cho tình yêu và đam mê. Đây là loại hoa được ưa chuộng nhất để trồng làm cảnh, làm quà tặng hoặc trang trí trong các sự kiện đặc biệt.",
                "image" => "image/hoa-12.jpg"
            ],
            [
                "name" => "Cẩm tú cầu",
                "description" => "Hoa hồng đỏ biểu tượng cho tình yêu và đam mê. Đây là loại hoa được ưa chuộng nhất để trồng làm cảnh, làm quà tặng hoặc trang trí trong các sự kiện đặc biệt.",
                "image" => "image/hoa-13.jpg"
            ],
            [
                "name" => "Hoa cúc dại",
                "description" => "Hoa hồng đỏ biểu tượng cho tình yêu và đam mê. Đây là loại hoa được ưa chuộng nhất để trồng làm cảnh, làm quà tặng hoặc trang trí trong các sự kiện đặc biệt.",
                "image" => "image/hoa-14.jpg"
            ]
        ];
    }
?>
