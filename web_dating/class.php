<?php
class User
{
    private $username;
    private $email;
    private $password;
    private $birthDate;
    private $gender;
    private $created_at;
    private $location;
    private $avatar;
    private $image_cover;
    private $hobbies;

    public function sign_up($username, $email, $password, $birthDate, $gender, $created_at)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->gender = $gender;
        $this->created_at = $created_at;

        global $conn;
        $sql = "INSERT INTO users (username, email, password, birthDate, gender, created_at)
                VALUES ('" . $username . "', '" . $email . "', '" . $password . "', '" . $birthDate . "', '" . $gender . "', '" . $created_at . "')";

        $insert_user = mysqli_query($conn, $sql);
        return $insert_user;
    }

    public function login($email, $password)
    {
        global $conn;

        $sql = "select username, email, password from users where email = '" . $email . "'";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_assoc($query);
            if (password_verify($password, $data["password"])) {
                $_SESSION["email"] = $data['email'];

                $_SESSION["username"] = $data['username'];

                $response = "Đăng nhập thành công";
            } else {
                $response = "Bạn đã nhập sai mật khẩu";
            }
        } else {
            $response = "Tài khoản không tồn tại";
        }

        return $response;
    }


    public function show_information($email)
    {
        global $conn;
        $sql = "select username, gender, birthDate, avatar, image_cover from users where email = '" . $email . "'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    public function add_information($location, $hobbies, $avatar, $image_cover)
    {
        $this->location = $location;
        $this->hobbies = $hobbies;
        $this->avatar = $avatar;
        $this->image_cover = $image_cover;

        global $conn;
        $sql = "insert into users(location, hobbies, avatar, cover_image)
                values('" . $location . "', '" . $hobbies . "', '" . $avatar . "', '" . $image_cover . "')";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    public function update_informations()
    {
        global $conn;

        $sql = "UPDATE users SET hobbies = '" . isset($_POST['hobbies']) . "', location = '" . isset($_POST['location']) . "', birthDate = '" . isset($_POST['birthDate']) . "'";
    }
}

class DateEvent
{
    private $creator;
    private $startTime;
    private $location;
    private $description;
    private $participants;
    private $event_id;


    public function createEvent($creator, $startTime, $location, $description)
    {
        $this->creator = $creator;
        $this->startTime = $startTime;
        $this->location = $location;
        $this->description = $description;
        $this->participants = array();
        // Thêm sự kiện vào cơ sở dữ liệu và gán ID của sự kiện
        global $conn;


        $sql = "INSERT INTO date_events (creator_id, start_time, location, description)
                VALUES ('" . $this->creator . "', '" . $this->startTime . "', '" . $this->location . "', '" . $this->description . "')";

        $insert_event = mysqli_query($conn, $sql);

        if ($insert_event) {
            // Lấy ID của sự kiện sau khi thêm vào cơ sở dữ liệu
            $this->event_id = mysqli_insert_id($conn); // Gán event_id
            return $this->event_id;
        } else {
            return false; // Nếu có lỗi khi thêm sự kiện
        }
    }

    public function editEvent($event_id)
    {
        // Chỉnh sửa thông tin sự kiện trong cơ sở dữ liệu
        global $conn;

        $sql = "UPDATE date_events SET start_time = '" . $this->startTime . "', location = '" . $this->location . "', description = '" . $this->description . "'
                WHERE id = '" . $event_id . "'";

        $update_event = mysqli_query($conn, $sql);
        return $update_event;
    }

    public function deleteEvent($event_id)
    {
        // Xóa sự kiện khỏi cơ sở dữ liệu
        global $conn;

        $sql = "DELETE FROM date_events WHERE id = '" . $event_id . "'";
        $delete_event = mysqli_query($conn, $sql);
        return $delete_event;
    }

    public function inviteParticipant($user_id)
    {
        // Mời người dùng tham gia sự kiện và thêm họ vào danh sách người tham gia
        $this->participants[] = $user_id;
    }

    public function confirmParticipation($user_id)
    {
        // Xác nhận tham gia sự kiện cho người dùng cụ thể
        // (cập nhật trạng thái tham gia trong cơ sở dữ liệu)
        global $conn;

        $sql = "INSERT INTO date_event_participants (date_event_id, participant_id)
                VALUES ('" . $this->event_id . "', '" . $user_id . "')";

        $confirm_participation = mysqli_query($conn, $sql);
        return $confirm_participation;
    }

    public function getParticipants()
    {
        // Trả về danh sách người tham gia sự kiện
        return $this->participants;
    }
}

class Notification
{
    private $recipient;
    private $notificationType;
    private $content;
    private $created_at;

    public function __construct($recipient, $notificationType, $content)
    {
        $this->recipient = $recipient;
        $this->notificationType = $notificationType;
        $this->content = $content;
        $this->created_at = date('Y-m-d H:i:s'); // Ngày và giờ hiện tại
    }

    public function sendNotification()
    {
        // Lưu thông báo vào cơ sở dữ liệu
        global $conn;

        $sql = "INSERT INTO notifications (recipient_id, notification_type, content, created_at)
                VALUES ('" . $this->recipient . "', '" . $this->notificationType . "', '" . $this->content . "', '" . $this->created_at . "')";

        $insert_notification = mysqli_query($conn, $sql);
        return $insert_notification;
    }

    public function markAsRead()
    {
        // Đánh dấu thông báo là đã đọc (cập nhật trạng thái trong cơ sở dữ liệu)
        global $conn;

        $sql = "UPDATE notifications SET is_read = 1 WHERE recipient_id = '" . $this->recipient . "'";
        $mark_as_read = mysqli_query($conn, $sql);
        return $mark_as_read;
    }
}

class Chat
{
    private $sender;
    private $receiver;
    private $sendTime;
    private $message;

    public function __construct($sender, $receiver, $message)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
        $this->sendTime = date('Y-m-d H:i:s'); // Ngày và giờ gửi tin nhắn
    }

    public function sendMessage()
    {
        // Lưu tin nhắn vào cơ sở dữ liệu
        global $conn;

        $sql = "INSERT INTO chats (sender_id, receiver_id, send_time, message)
                VALUES ('" . $this->sender . "', '" . $this->receiver . "', '" . $this->sendTime . "', '" . $this->message . "')";

        $insert_message = mysqli_query($conn, $sql);
        return $insert_message;
    }

    public function markAsRead()
    {
        // Đánh dấu tin nhắn là đã đọc (cập nhật trạng thái trong cơ sở dữ liệu)
        global $conn;

        $sql = "UPDATE chats SET is_read = 1 WHERE receiver_id = '" . $this->receiver . "'";
        $mark_as_read = mysqli_query($conn, $sql);
        return $mark_as_read;
    }

    public function viewChatHistory()
    {
        // Truy vấn lịch sử trò chuyện từ cơ sở dữ liệu
        global $conn;

        $sql = "SELECT * FROM chats WHERE (sender_id = '" . $this->sender . "' AND receiver_id = '" . $this->receiver . "')
                OR (sender_id = '" . $this->receiver . "' AND receiver_id = '" . $this->sender . "')
                ORDER BY send_time ASC";

        $query = mysqli_query($conn, $sql);
        return $query;
    }
}
