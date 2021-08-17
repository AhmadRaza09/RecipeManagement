-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 06:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `allrecipe`
--

CREATE TABLE `allrecipe` (
  `id` int(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `time` int(2) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ingredients` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allrecipe`
--

INSERT INTO `allrecipe` (`id`, `title`, `time`, `description`, `ingredients`) VALUES
(1, 'Special Chicken Karahi Recipe', 75, 'Chicken Karahi Recipe is one of the most popular and consumed dish of Pakistan. Every house and restaurant has its own unique version of Chicken Karahi. No dinner party or special occasion is complete without serving a Desi Special Chicken Karahi. Taste, aroma, method of cooking, and use of black, green, or red chilies adds to the Special factor in this recipe. It is prepared with half kg chicken pieces, spices, ginger, garlic and tomatoes, whereas the onions are excluded. There is not much curry in this recipe and it is served with dry masala. Strong taste of Desi aromatic Special Chicken Karahi is perfect for your taste buds. Mothers and wives can follow this delicious recipe at home and can serve it with Nan, Kulcha or Roti. This Karahi is served at all leading Pakistani, Indian restaurants', '2 kg chicken,5 green chili large,, 2 tbsp ginger paste, 1 tbsp chopped ginger,1 tsp sabit dhanya, 1 tbsp mix garam masala, 2 tbsp yogurt'),
(2, ' Macaroni Recipe', 15, 'Macaroni is a variety of pasta in the shape of narrow tubes. People like to eat it with chicken and mutton mince. In Pakistan Macaroni is mainly cook in different styles and variations like banked macaroni, cheese macaroni and macaroni with sauce. It is a simple snack that a person can make easily at home in minutes.', '2 cups of Macaroni Pasta, 2 large Tomatoes1 medium Onion, 1 large Potato, Salt to taste, 1 tsp. Garam Masala Powder, 1 tsp. Ginger Paste Pisi Adrak, 10 cups of Water'),
(3, 'Daal Chawal Recipe', 40, ' It is delicious yet tasty to give you a blend of health with taste. Give us your feedback for this recipe', '1 cup Split Red Masoor dal, 1 large onion, finely chopped ,2 tomatoes1 green chillies, chopped'),
(4, 'Mazedar Chicken Dish Recipe', 45, 'his Punjabi Chana Masala or Chole Masala is an authentic North Indian style Chickpea Curry made with white chickpeas, freshly powdered spices, onions, tomatoes and herbs.', '4 table spoon,thora sa Namak'),
(5, 'Lahori Red Chicken Karahi Recipe', 50, 'Red Chicken Karahi and rejoice your bad mood. You can find the recipe and ingredients of this recipe online. Prepare it, and share the recipe among your family and friends', 'Lemon 2, Green chilies chopped 4 Clarified butter 1 cup, Green coriander chopped 1 bunch'),
(6, 'Besan Kay Dahi Baray Recipe', 25, 'Besan kay Dahi Baray  Besan kay Dahi Baray also known as gram flour dumplings in yogurt is the most popular Desi snack in Pakistan. Besan kay Dahi Baray is delicious to taste and the ultimate treat for a Desi foodie. The batter of Dahi Baray is prepared with Besan, baking soda, Heeng, salt, chat masala, sugar, cumin seeds, chili powder, Imli chutney and yogurt. Firstly, Dahi Baray is fried in hot oil, then soaked in water, and then squeezed the extra water and dumplings are set in a serving dish. Yogurt for Besan kay Dahi Baray is prepared using salt, sugar, and chat masala. Yogurt is poured on dumplings and later garnished with Imli chutney, and chaat masala. This Besan Kay Dahi Baray recipe is amazingly delicious and can be your perfect dish for Iftar during Ramadan, or any hitea party. Try Besan kay Dahi Baray recipe at home by follow the method for the perfect taste.', 'Oil for deep frying, 300 gms. Yogurt, 1 tsp. salt, 1 tsp. sugar, Chaat masala, 2 cups besan, 2 pinches of baking soda'),
(7, 'Paratha roll', 20, 'paratha roll that is very easy to make and very tasty.', 'paratha dough, chicken tikka'),
(8, 'Fruit custurd', 60, 'fruit custurd is a desert made by mixing chopped seasonal fruits with chilled cusard and sauce', 'milk, custurd powder, sugar and some fruits.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allrecipe`
--
ALTER TABLE `allrecipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allrecipe`
--
ALTER TABLE `allrecipe`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
