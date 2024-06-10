-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 05:46 PM
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
-- Database: `kidflix_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `genre`, `video`) VALUES
(1, 'Umbrella', 'The message of the film is empathy for others, says Hilario and Pece.That one can make a huge difference in the lives of others by just being kind. It makes us reflect on the importance of observing, listening, and understanding that we cannot judge people without knowing what is behind their experience.', 'Animated', 'UMBRELLA.mp4'),
(2, 'Elemental', 'Dive into a vibrant world where the four elements of Earth, Air, Fire, and Water are not just forces of nature, but the foundations of life itself. \"Elemental\" follows the journey of Aria, a fiery young woman with the rare ability to manipulate more than one element. Born in a city where one\'s identity and status are bound to the element they control, Aria discovers a hidden truth that could unravel the very fabric of her society. After a chance encounter with an enigmatic stranger who controls the elusive fifth element, Aria is thrust into an adventure beyond her wildest dreams. With her newfound ally, she sets out on a quest that takes her from the depths of the oceanic trenches to the heights of the airy mountain peaks, battling unnatural storms and fiery beasts along the way. As Aria explores the beautiful and diverse landscapes, she learns about the delicate balance of her world and the corrupt power struggle threatening to tip it into chaos.', 'animated', 'Lauv.mp4'),
(3, 'Hotel Transalveniya', 'Why is Hotel Transylvania so popular?\r\nStill, the main reason why the franchise has done so well is because its universe focuses on quirky characters that appeal to all ages. Whether Sandler sticks to adult comedies or continues to grow his list of more serious roles, the potential for box office earnings will be limited if the movies are adult-rated.', 'animated', 'hotel-transalvaniya.mp4'),
(4, 'Blood of Zeus', 'Blood of Zeus, formerly known as Gods & Heroes, is an American adult animated fantasy action television series created and written by Charley and Vlas Parlapanides for Netflix.', 'Animated', 'Blood of Zeus.mp4'),
(5, 'Cryptic Investiag', 'Cryptic Rock is a music and horror movie publication providing in-depth interviews, reviews, and concert journalism', 'Animated', 'anime.mp4'),
(6, 'Bread', ' The film follows Shlomo Elmaliach (Rami Danon), who loses his job at his town\'s local bakery when it is forced to close. Rather than join the other unemployed protesters, Elmaliach locks himself in his own home and launches a very personal hunger strike.', 'Animated', 'The Bread.mp4'),
(7, 'Candle', 'The Christmas Candle is a 2013 movie about a pastor who accepts a position in a town that believes in a Christmas miracle candle. The movie is based on the 2013 novel of the same name by Max Lucado. Some say the movie\'s main messages are that faith and good works are not mutually exclusive and that miracles can happen if you believe strongly enough.', 'Animated', 'candle.mp4'),
(8, 'Chicken Run', 'It tells the story of Rocky and Ginger who lead a rescue mission when their daughter has been abducted to a highly-advanced poultry farm run by their old enemy Mrs. Tweedy.', 'Animated', 'Chicken Run.mp4'),
(9, 'Encanto', 'Encanto follows a multigenerational Colombian family, the Madrigals, led by a matriarch whose children and grandchildren — except for Mirabel Madrigal — receive magical gifts from a miracle, which they use to help the people in their rural community, called the Encanto.', 'Animated', 'Disney\'s Encanto.mp4'),
(10, 'Elephant', 'Elephant is a film where it shows the story of two male students who attended the Colombine High School and on July 20th, 1999, everything changed, when they go on a school shooting spree caused by the everyday stressful challenges they had to endure including being bullied and psychologically abused.', 'Animated', 'The Magicians Elephant.mp4'),
(11, 'Folded Wish', 'A pair of twin sisters attempt to fold a thousand origami cranes in hopes to recover from a fatal disease. A pair of twin sisters attempt to fold a thousand origami cranes in hopes to recover from a fatal disease.', 'Animated', '_A Folded Wish_.mp4'),
(12, 'Frozen', 'When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition.', 'Animated', 'Frozen.mp4'),
(13, 'Hair Love', 'Hair Love is a 2019 American animated short film directed by Matthew A. Cherry, Everett Downing Jr., and Bruce W. Smith, and written by Cherry. It follows the story of a man who must do his daughter\'s hair for the first time, and features Issa Rae as the voice of the mother.', 'Animated', 'Hair Love.mp4'),
(14, 'Ice Age', 'On Earth 20,000 years ago, everything was covered in ice. A group of friends, Manny, a mammoth, Diego, a saber tooth tiger, and Sid, a sloth encounter an Eskimo human baby. They must try to return the baby back to his tribe before a group of saber tooth tigers find him and eat him.', 'Animated', 'Ice Age.mp4'),
(15, 'Leo', 'Once Vijay came in the lime light through media for saving people from Hyena attack as well as an incident in his coffee shop gets superfluous attention, the situation intensifies, some callous thugs notice him as gangster Leo Das, son of infamous warlord Sanjay Dutt.', 'Animated', 'Leo.mp4'),
(16, 'Super Pets', 'When Superman and the rest of the Justice League are kidnapped, Krypto must convince a rag-tag shelter pack--Ace the hound, PB the potbellied pig, Merton the turtle and Chip the squirrel--to master their own newfound powers and help him rescue the superheroes.', 'Animated', 'SUPER-PETS.mp4'),
(17, 'Merida and Her Family Supper Shenanigans', 'Determined to make her own path in life, Princess Merida defies a custom that brings chaos to her kingdom. Granted one wish, Merida must rely on her bravery and her archery skills to undo a beastly curse.', 'Animated', 'Merida and Her Family.mp4'),
(18, 'Migration', 'In a New England forest lives a family of mallards consisting of anxious father Mack, adventurous mother Pam, restless son Dax and innocent daughter Gwen. Mack constantly discourages his family to venture beyond the pond, where they live, much to Pam\'s displeasure.', 'Animated', 'Migration.mp4'),
(19, 'Moana', 'The film is set in ancient Polynesia and tells the story of Moana, the strong-willed daughter of a chief of a coastal village, who is chosen by the ocean itself to reunite a mystical relic with the goddess Te Fiti.', 'Animated', 'Moana.mp4'),
(20, 'Never Give up', 'The true story of how twenty-year-old Brad Minns does the impossible in the Men\'s Singles Tennis Finals in the 1985 Deaf World Games. In a five-hour match for the ages, Minns somehow comes back from match point in the third set to winning the gold medal in the fifth set.', 'Animated', 'Never Give Up.mp4'),
(21, 'OLF', 'A vacationing family discovers that the secluded beach where they\'re relaxing for a few hours is somehow causing them to age rapidly, reducing their entire lives into a single day.', 'Animated', 'Olaf.mp4'),
(22, 'One', 'Story of Kadakkal Chandran, the Chief Minister of Kerala whose uncompromising attitude towards corruption and his dictatorial actions have gained him a lot of enemies. The events get more intense when he faces an allegation.', 'Animated', 'ONE.mp4'),
(23, 'Orion & the dark', ' Follows Orion, a young boy who is afraid of heights, pets, and rendered nearly catatonic by the worst of all perils: the dark. The Dark takes Orion on a nighttime trip to prove to the youngster that the only thing to fear is fear itself.', 'Animated', 'Orion and the Dark.mp4'),
(24, 'Ratatouille', 'When fate places Remy in the sewers of Paris, he finds himself ideally situated beneath a restaurant made famous by his culinary hero, Auguste Gusteau. Remy\'s passion for cooking soon sets into motion a hilarious and exciting rat race that turns the world of Paris upside down.', 'Animated', 'RATATOUILLE.mp4'),
(25, 'Sea beast', 'It tells the story of a sea monster hunter and a young orphan girl who joins his group of sea monster hunters on their search for the elusive Red Bluster in the 17th century. The film began a limited theatrical release on June 24, 2022, before debuting on Netflix on July 8.', 'Animated', 'The Sea Beast.mp4'),
(26, 'Tangled', 'Tangled is a 2010 Disney movie about a lost princess with magical hair who wants to leave her tower. The movie stars the voices of Mandy Moore, Zachary Levi, and Donna Murphy. It was directed by Nathan Greno and Byron Howard, and written by Dan Fogelman. \n', 'Animated', 'TANGLED.mp4'),
(27, 'The Wish', 'The story focuses on a 17-year-old girl named Asha (DeBose) in the Kingdom of Rosas, who makes a passionate plea to the stars in a moment of need, which leads her to meet a living, magic star fallen from the sky, something that attracts the attention of Rosas\' evil ruler Magnifico (Pine) as well.', 'Animated', 'This Wish.mp4'),
(28, 'Tinkerbell', 'Tinker Bell (Mae Whitman) is born from the first laugh of a baby and is brought by the winds to Pixie Hollow (which is part of the island of Neverland), and Queen Clarion (Anjelica Huston) welcomes her. She learns that her talent is to be one of the tinkers, the fairies who make and fix things.', 'Animated', 'TINKER BELL.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Nazar Hussain', 'nazarliaqat123@gmail.com', 'nazar123'),
(2, 'ali', 'ali@ucp.com', 'ali123'),
(3, 'ashma', 'awaheed@nust.com', 'ashma123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
