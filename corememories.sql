-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(1500) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'content1-1.png', '\r\nA father is someone who provides not just for the family, but also for the emotional growth of his children. As a son, I see my father as a role model, someone who teaches me valuable life lessons through both his words and actions. He’s always there when I need advice, guidance, or just someone to talk to. His support, whether in school or in life, helps me become a better person each day. He’s not just a father; he’s a protector, a mentor, and a constant source of strength. His sacrifices and love are things I’ll always appreciate and carry with me as I grow.', NULL),
(3, 1, 'content1-2.png', 'A mother is the heart of the family, offering unconditional love, support, and guidance. As a son, I see my mom as my greatest source of strength and inspiration. She’s always there for me, whether I need help with school, personal struggles, or just someone to talk to. Her nurturing nature and selflessness shape who I am and motivate me to be the best version of myself. A mother’s sacrifices often go unnoticed, but her love is felt in everything she does. She’s not just a caregiver, but a role model who teaches me the true meaning of resilience, kindness, and compassion.', NULL),
(4, 1, 'content1-3.png', 'My brother is someone I deeply admire and care for. He’s not just a sibling but also a close friend and constant presence in my life. Whether it\'s sharing laughs, supporting each other through tough times, or simply enjoying moments of everyday life, he brings a sense of joy and stability that’s hard to describe.\r\n\r\nHe’s someone I can rely on, whether I need advice, a helping hand, or just someone to talk to. His unique perspective and personality add so much value to our family and to those who know him. Like all siblings, we may have our differences now and then, but the bond we share is unshakable.\r\n\r\n', NULL),
(5, 2, 'content2-1.jpg', 'Friends are those who have a common bond of trust, affection, and support. They can bring happiness, comfort, and understanding into your life. Open communication, shared experiences, and a willingness to support one another through good times and bad are the foundations of friendships.', NULL),
(6, 2, 'content2-2.jpg', 'The picture captures a fun and unforgettable moment when my friends and I went to watch Inside Out 2. We were all excited, laughing, and chatting while waiting for the movie to start. The cinema was buzzing with energy, and everyone seemed to be in a great mood. The picture perfectly captures the joy and connection we shared as we enjoyed the film together.', NULL),
(7, 2, 'content2-3.jpg', 'This picture was taken during my 21st birthday celebration with my friends, and it’s a moment I’ll always remember. My friends made this day special with their presence and thoughtful surprises. It was a perfect mix of fun, laughter, and gratitude, and this picture really captures the love and joy we shared as we made memories to last a lifetime.', NULL),
(8, 3, 'content3-1.jpg', 'This picture was taken during the time I was selected as the captain and a player of the Mobile Legends team for my school. It was such an exciting and proud moment for me. You can see me standing confidently with my teammates, all geared up and ready to represent our school in the tournament. The picture perfectly captures that mix of pride, excitement, and the teamwork that made this experience unforgettable.', NULL),
(9, 3, 'content3-2.jpg', 'This picture was taken when I was showcasing my jersey for my team, and it’s a moment I’ll always be proud of. It was a special moment because wearing it meant that I was officially part of something bigger, and it was a reminder of the teamwork and effort we all shared. This picture captures the pride and excitement of being a part of the team and showing off our hard-earned identity.', NULL),
(10, 3, 'content3-3.jpg', 'Mobile Legends is an exciting and fast-paced multiplayer online battle arena (MOBA) game that has really captured my attention.  It’s a game that requires skill, teamwork, and communication, and every match feels different, which keeps it fresh and exciting. Mobile Legends isn’t just a game to me; it’s an experience where I can challenge myself and connect with friends, making it hard to put down!', NULL),
(11, 4, 'content4-1.jpg', 'One Punch Man is an anime that follows the story of Saitama, a hero who can defeat any enemy with just one punch. What I love about One Punch Man is how it mixes intense action with comedy. While Saitama can easily defeat any opponent, the show focuses on how he deals with the frustrations of being too powerful and not getting the recognition he deserves. ', NULL),
(12, 4, 'content4-2.jpg', 'One Piece is hands down my favorite anime! It\'s an epic adventure that follows Monkey D. Luffy and his crew of pirates as they search for the legendary treasure known as the \"One Piece.\" What I love most about One Piece is how it blends humor, action, and heart. The world-building is incredible, and the series has this way of creating different islands and cultures that feel so alive. Luffy’s determination to become the Pirate King and his unwavering belief in his friends is really inspiring.', NULL),
(13, 4, 'content4-3.jpg', 'Jujutsu Kaisen is an anime that blends intense action with a dark, supernatural world. The story follows Yuji Itadori, a high school student who becomes involved in the world of curses after swallowing a powerful cursed object — a finger belonging to a dangerous curse named Ryomen Sukuna. The animation is top-tier, with fluid action scenes and well-choreographed battles that make the series even more exciting to watch. Jujutsu Kaisen has quickly become one of my favorite anime because of its fast-paced action, memorable characters, and the way it keeps you hooked with every new episode.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island ', 'A Happy family deserves a happy life.', 'A family is a fundamental unit of society, encompassing individuals who share deep bonds of love, care, and mutual support. Families serve as the foundation for personal growth, offering guidance, shared values, and a safe environment for nurturing individuality. They celebrate achievements, offer comfort during challenges, and create lasting memories through shared experiences. A family shapes a person\'s identity, instilling traditions, beliefs, and values that influence their path in life.', NULL, 'fam_island.png', NULL),
(2, 'Friends Island', 'Friend Island is a peaceful getaway where bonds are strengthened, memories are made, and the spirit of friendship thrives amidst tranquil surroundings and shared adventures.', 'Friendship is a deep and meaningful bond between individuals built on trust, mutual respect, and shared experiences. It is a relationship that transcends time, distance, and circumstances, providing a foundation of emotional support, companionship, and understanding. Friends enrich our lives by celebrating our successes, comforting us in times of need, and standing by us through life’s challenges.\r\n\r\nTrue friendship is marked by honesty, loyalty, and acceptance, allowing individuals to express themselves authentically without fear of judgment. It thrives on communication, shared interests, and the willingness to invest time and effort in nurturing the relationship. Friends inspire each other to grow, encourage positive change, and offer a safe space for vulnerability.\r\n\r\nBeyond just a connection, friendship is a source of joy and fulfillment, filling our lives with laughter, cherished me', NULL, 'friend island.png', NULL),
(3, 'Gaming Island', 'As an esports player and a student, I balance the excitement of competitive gaming with the dedication required for my academic pursuits. I strive to excel both in the gaming world and in my studies, using discipline, focus, and teamwork to achieve success in both arenas.', ' Gaming has taught me the value of teamwork, strategic thinking, and resilience, skills that I apply to my studies and daily life. In esports, I continuously push myself to improve, learning from both victories and setbacks, while also maintaining a strong academic performance. The ability to manage multiple responsibilities effectively is key to my success, as I strive to stay at the top of my game, both in school and in esports. This unique experience has shaped my mindset, allowing me to be adaptable, persistent, and goal-oriented. It’s a journey of growth, where the lessons learned in both fields enrich each other, making me more determined to succeed in all aspects of life.', NULL, 'gaming island.png', NULL),
(4, 'Anime Island', 'Anime is a style of animation originating from Japan, characterized by vibrant artwork, fantastical themes, and diverse genres. It combines visually striking animation with compelling stories, often exploring deep emotional, philosophical, or action-packed narratives.', 'Anime is a unique and influential form of animated entertainment that originated in Japan, renowned for its distinctive art style, imaginative storytelling, and broad appeal across diverse audiences. It covers a vast range of genres, from action and adventure to romance, horror, fantasy, sci-fi, and slice of life, allowing for an endless variety of experiences that cater to all tastes and age groups.\r\n\r\nWhat sets anime apart is its rich visual style, often featuring exaggerated expressions, vibrant colors, and highly detailed character designs. The animation can range from highly stylized to incredibly realistic, often enhancing the emotional depth of the story being told. Beyond its art, anime is known for its intricate plots, complex characters, and the exploration of profound themes such as identity, love, friendship, and the human condition.\r\n\r\nAnime can also be deeply cultural, refl', NULL, 'anime island.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
