-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： mysql:3306
-- 產生時間： 2023 年 05 月 28 日 18:46
-- 伺服器版本： 8.0.30
-- PHP 版本： 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `NCYU_SHOES`
--

-- --------------------------------------------------------

--
-- 資料表結構 `page_visits`
--

CREATE TABLE `page_visits` (
  `tracking_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `page_visits`
--

INSERT INTO `page_visits` (`tracking_id`, `timestamp`, `page_name`) VALUES
('d2e0960144425b68d2228d0c151db42d9565cf374c76cdcaece60ea3d16fdc6fda0b09', '2023-05-28 18:39:40', 'product_search.php'),
('d2e0960144425b68d2228d0c151db42d9565cf374c76cdcaece60ea3d16fdc6fda0b09', '2023-05-28 18:39:41', 'product_all.php'),
('d2e0960144425b68d2228d0c151db42d9565cf374c76cdcaece60ea3d16fdc6fda0b09', '2023-05-28 18:42:57', 'product_search.php'),
('d2e0960144425b68d2228d0c151db42d9565cf374c76cdcaece60ea3d16fdc6fda0b09', '2023-05-28 18:42:59', 'index.php'),
('d2e0960144425b68d2228d0c151db42d9565cf374c76cdcaece60ea3d16fdc6fda0b09', '2023-05-28 18:43:01', 'product_search.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:43:18', 'login_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:43:46', 'login_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:43:57', 'index.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:43:59', 'login_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:44:06', 'index.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:44:09', 'login_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:44:16', 'index.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:44:19', 'edit_profile_photo_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:45:26', 'edit_profile_photo_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:45:29', 'edit_passwd_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:45:40', 'edit_passwd_page.php'),
('89d92dc907506d24362b6e7517b15d75ed31b0bb131351357ef705abcfca01af08f5c9', '2023-05-28 18:46:01', 'index.php');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `description`, `category`, `rating`) VALUES
(1, 'EQ19 跑鞋', 1299, '保持速度。這款 adidas 跑鞋採用輕量鞋面設計，搭配 Cloudfoam 避震中底，提供柔軟彈力腳感。結合彈性大底設計，在各種路面都能活動自如。', '跑鞋', 5),
(2, 'SUPERNOVA 2.0 跑鞋', 3890, 'Supernova 2 的碳足跡比 2020 Supernova 低了 10%。*從原料提取、加工、包裝到產品壽命結束，我們計算並傳達其碳足跡，符合國際公認的標準：ISO 14067。', '跑鞋', 4),
(3, 'SPIRITAIN 2000 GORE-TEX 跑鞋', 2299, '這款 adidas 跑鞋搭載 Adiprene 避震科技，提供舒適腳感，讓你在比賽中一舉領先。採用彈性鞋帶設計，穿脫容易，跑步時也不意鬆脫或擠壓雙腳。透氣的 GORE-TEX 鞋面有助保持乾爽，腳跟下的 FORMOTION 能隨地面變化做調整，讓步伐更順暢，也能讓轉身動作更穩定。', '跑鞋', 3),
(4, 'RUN 80S 跑鞋', 1859, '造型復古，感受摩登舒適。這款跑鞋搭載 Cloudfoam 中底，助你舒適運動。含麂皮飾面和標誌性三條紋，時尚有型。', '跑鞋', 4),
(5, 'DROP STEP 經典鞋', 2299, '這款 adidas 經典鞋融合了品牌的籃球風範和對設計的堅持。飾有幾何拼接色塊、斜角三條紋和中筒，力求在比賽中展現個性。中底腳感舒適，搭配富有質感的內裡，力求打造舒適邁步體驗。併攏雙腳時，從後方能看到非對稱三葉草。', '籃球鞋', 3),
(6, 'DROP STEP XL 經典鞋', 2399, '這款 adidas Drop Step XL 經典鞋秉承復古設計，以大膽的比例和徽標設計新鮮演繹，用創新致敬經典。助你自我表達，同時帶來舒適腳感。EVA 中底，及踝鞋領，塑就從容自在的邁步體驗。', '籃球鞋', 2),
(7, 'FORUM LUXE 經典鞋', 2559, '結合 80 年代風格和現代奢華。這款 adidas 鞋款具有高級皮革鞋面搭配軟呢以及麂皮表層等精緻細節，打造經典的 Forum 風格。低調的摩登配色讓造型更加分。', '籃球鞋', 3),
(8, 'FORUM 運動休閒鞋', 2199, '不只是一雙鞋，它是一種態度。這款 adidas Forum 於 1984 年初登場，在籃球界和音樂界都廣受喜愛。此經典鞋款重現 80 年代態度，具備爆發性的籃球能量和經典 X 型腳踝束帶設計，去蕪存菁成為低筒版本，適合街頭穿著。', '籃球鞋', 4),
(9, 'ADIZERO CYBERSONIC 網球鞋', 5290, '為閃電疾速網球鞋換上嶄新外觀。穿上這款 adidas adizero Cybersonic 網球鞋，在紅土球場上領先一步。輕量 ENERGYRODS 能幫助快速變向，雙密度貼地 Lightstrike 中底設計，隨時保持最佳狀態。網布鞋面搭配以 60% 再生 Boost 打造的 Adituff 防磨區塊，在球場上全力以赴，無需擔心鞋子磨損。', '網球鞋', 3),
(10, 'STREETCHECK 經典鞋', 1199, '簡單、有型。此 adidas 鞋款靈感來自經典籃球鞋，呈現獨特的極簡風格。鞋面採用單色設計，率性氛圍讓休閒造型升級。橡膠貝殼鞋頭塑造經典造型，Cloudfoam 舒適鞋墊提供優異避震效果。', '網球鞋', 1),
(11, 'GRAND COURT 經典鞋', 1699, '此 adidas 鞋款展現復古風範，風格簡約清新。', '網球鞋', 2),
(12, 'GRAND COURT SE 經典鞋', 1699, '復古風格，新鮮演繹。此鞋款以簡約摩登設計重塑 70 年代網球鞋。採用麂皮飾面和紋理感皮革鞋面。', '網球鞋', 4),
(13, 'ADILETTE PREMIUM 運動拖鞋', 2490, '這款 adidas Adilette 拖鞋，在世界多地備受青睞。採用軟木中底，舒適別致。', '拖鞋', 5),
(14, 'ADILETTE 22 運動拖鞋', 1890, '一步步通往永續未來的道路上。這款 adidas Adilette 運動拖鞋靈感源自 3D 地形和人類遠征火星的過程，搭配未來感設計細節，抵抗地心引力。結合流線型鞋床和柔軟橡膠大底，有助提供絕佳舒適感。', '拖鞋', 1),
(15, 'ADILETTE 運動拖鞋', 1290, '這款 adidas Adilette 拖鞋的靈感來自邁阿密的「Magic City」活力，搶眼的色彩和材質選用，營造海風輕拂氛圍。無論是白沙還是白色野餐布，都能完美搭配。可搭配俐落上衣和錐型褲，駕馭各種場合。', '拖鞋', 3),
(16, 'ADICANE 人字拖鞋', 1290, '這款 adidas 拖鞋採用經典人字設計，為造型增添一抹時尚氣息，搭配一體成型鞋床，在炎熱天氣中提供舒適腳感。', '拖鞋', 4),
(17, 'X SPEEDPORTAL.3 足球鞋', 2690, '穿上 adidas X Speedportal，解鎖全方位高速表現。這款足球鞋配有輕量塗層網布鞋面和兩個額外的前足鞋釘，適合各種球場。結合彈性平織鞋領和堅韌的 TPU 後跟穩定片，讓你自在暢跑。', '足球鞋', 3),
(18, 'X SPEEDPORTAL.3 室內足球鞋', 2690, '穿上 adidas X Speedportal，解鎖全方位高速表現。這款足球鞋配有輕量塗層網布鞋面和抓地力優異的橡膠大底，適合在室內球場上穿著。柔軟的 EVA 中底提供避震腳感，彈性平織鞋領和堅韌的 TPU 後跟穩定片則讓你瞬間飆出高速。', '足球鞋', 3),
(19, 'COPA PURE.4 TURF 室外足球鞋', 1990, 'adidas Copa Pure 的特色就是前所未有的舒適感和完美觸球感。這款足球鞋採用柔軟的合成皮革，鞋面設計提供舒適腳感，有助專注比賽。鞋底具有凸紋橡膠大底，適合在人工草皮球場穿著。', '足球鞋', 2),
(20, 'COPA PURE.4 室內足球鞋', 1990, 'adidas Copa Pure 的特色就是前所未有的舒適感和完美觸球感。這款足球鞋採用柔軟的合成皮革製成，鞋面設計有助專注比賽。橡膠大底可在平坦的室內球場上締造非凡表現。', '足球鞋', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `stock`
--

CREATE TABLE `stock` (
  `product_id` int NOT NULL,
  `store_id` int NOT NULL,
  `value` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `stock`
--

INSERT INTO `stock` (`product_id`, `store_id`, `value`) VALUES
(1, 1, 54),
(1, 2, 45),
(1, 3, 45),
(2, 1, 30),
(2, 2, 355),
(2, 3, 467),
(3, 1, 20),
(3, 2, 23),
(3, 3, 345),
(4, 1, 100),
(4, 2, 535),
(4, 3, 0),
(5, 1, 60),
(5, 2, 32),
(5, 3, 34),
(6, 1, 75),
(6, 2, 878),
(6, 3, 1234),
(7, 1, 24),
(7, 2, 54),
(7, 3, 53),
(8, 1, 241),
(8, 2, 246),
(8, 3, 7),
(9, 1, 45),
(9, 2, 462),
(9, 3, 878),
(10, 1, 65),
(10, 2, 46),
(10, 3, 45),
(11, 1, 565),
(11, 2, 642),
(11, 3, 355),
(12, 1, 723),
(12, 2, 462),
(12, 3, 23),
(13, 1, 46),
(13, 2, 676),
(13, 3, 535),
(14, 1, 133),
(14, 2, 673),
(14, 3, 32),
(15, 1, 454),
(15, 2, 352),
(15, 3, 878),
(16, 1, 9),
(16, 2, 564),
(16, 3, 54),
(17, 1, 35),
(17, 2, 563),
(17, 3, 246),
(18, 1, 31),
(18, 2, 567),
(18, 3, 45),
(19, 1, 75),
(19, 2, 234),
(19, 3, 12),
(20, 1, 878),
(20, 2, 656),
(20, 3, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'uuli', 'uuli123'),
(2, 'lee', 'lee123'),
(3, 'test', '123'),
(4, 'test2', 'testtest');

-- --------------------------------------------------------

--
-- 資料表結構 `users_profile_photo`
--

CREATE TABLE `users_profile_photo` (
  `user_id` int NOT NULL,
  `img_path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/img/users/uploads/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users_profile_photo`
--

INSERT INTO `users_profile_photo` (`user_id`, `img_path`) VALUES
(1, '/img/users/uploads/default.png'),
(2, '/img/users/uploads/default.png'),
(3, '/img/users/uploads/default.png'),
(4, '/img/users/uploads/default.png');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- 資料表索引 `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`product_id`,`store_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- 資料表索引 `users_profile_photo`
--
ALTER TABLE `users_profile_photo`
  ADD PRIMARY KEY (`user_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stock`
--
ALTER TABLE `stock`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users_profile_photo`
--
ALTER TABLE `users_profile_photo`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `users_profile_photo`
--
ALTER TABLE `users_profile_photo`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
