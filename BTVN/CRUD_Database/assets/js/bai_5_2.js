const kiemtra = false

showData()

$().ready(function () {

	$("#form-modal").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			ten: {
				required: true,
			},
			email: {
				email: true,
				required: true,
			},
			diachi: {
				required: true,
			},
			sdt: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			ten: {
				required: "Bắt buộc nhập tên",
			},
			email: {
				email: "Nhập đúng định dạng",
				required: "Bắt buộc nhập email",
			},
			diachi: {
				required: "Bắt buộc nhập địa chỉ",
			},
			sdt: {
				required: "Bắt buộc nhập số điện thoại",
				minlength: "Nhập 10 kí tự"
			},
		},

		submitHandler: function(form) {
				const ten = document.getElementById('txtTen').value
				const email = document.getElementById('txtEmail').value
				const diachi = document.getElementById('txtDiachi').value
				const sdt = document.getElementById('txtSDT').value
	
				// Tạo đối tượng
				const newPeople = {
					ten: ten,
					email: email,
					diachi: diachi,
					sdt: sdt,
				}
	
				// lấy giá trị trong localStorage , chuyển một chuỗi JSON thành đối tượng trong JS
				let people = JSON.parse(localStorage.getItem('people')) || []
	
				//Thêm dữ liệu mới vào list
				people.push(newPeople)
	
				//Lưu list vào localStorage
				localStorage.setItem('people', JSON.stringify(people))
	
	
				//Hiển thị danh sách
				showData()
	
				//Làm mới form
				form.reset()

		}
	})
});

function showData() {
	const people = JSON.parse(localStorage.getItem('people')) || []

	const tr = document.querySelector("#table")

	tr.innerHTML = `
		<thead>
		<tr>
			<th>
				<span class="custom-checkbox">
					<input type="checkbox" id="selectAll">
					<label for="selectAll"></label>
				</span>
			</th>
			<th>Họ và tên</th>
			<th>Email</th>
			<th>Địa chỉ</th>
			<th>Số điện thoại</th>
			<th>Hành động</th>
		</tr>
		</thead>
		`

	people.forEach((curr, index) => {
		var row = document.createElement('tr')

		row.innerHTML = `
			<td>
				<span class="custom-checkbox">
					<input type="checkbox" id="checkbox4">
				</span>
			</td>
			<td>${curr.ten}</td>
			<td>${curr.email}</td>
			<td>${curr.diachi}</td>
			<td>${curr.sdt}</td>
			<td>
				<button onclick="Update(${index})" class=" btn btn-primary"><i class="fa-solid fa-pen"></i></button>
				<button onclick="Delete(${index})" class=" btn btn-primary"><i class="fa-solid fa-trash"></i></button>
			</td>
		`

		tr.appendChild(row)
	});
}

function Delete(index) {
	const people = JSON.parse(localStorage.getItem("people")) || []

	people.splice(index , 1)
	localStorage.setItem("people" , JSON.stringify(people))
	showData()
}