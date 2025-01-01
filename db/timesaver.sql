-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 11:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timesaver`
--

-- --------------------------------------------------------

--
-- Table structure for table `razorpay`
--

CREATE TABLE `razorpay` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_id` varchar(255) NOT NULL,
  `pay_status` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `service_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `razorpay`
--

INSERT INTO `razorpay` (`id`, `email`, `amount`, `pay_id`, `pay_status`, `date_added`, `service_name`) VALUES
(8, 'bhavya', 599, 'pay_KPaPB0H4QGzXV6', 'Success', '2022-10-04 05:54:07', 'Bed bug control'),
(9, 'bhavya', 599, 'pay_KPaRI2sqj7GWxA', 'Success', '2022-10-04 05:56:06', 'Bed bug control'),
(10, 'nivaaninfotech@gmail.com', 299, 'pay_L0lK29PSYW63el', 'Success', '2023-01-06 04:37:53', 'Office furniture assembly');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `book_id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `total_price` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`book_id`, `email`, `service_name`, `total_price`, `date`, `status`) VALUES
(37, 'nivaaninfotech@gmail.com', 'Office furniture assembly', '299', '2023-01-06 10:04:18', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `image`, `status`) VALUES
(6, 'Carpenter', 'car-1.jfif', b'0'),
(7, 'Electrician', 'fan.jpg', b'0'),
(8, 'Maid service', 'Domestic-cook-in-Thane.jpg', b'0'),
(9, 'Babysitter service', 'babysitter.jpg', b'0'),
(10, 'Cleaning', 'cleaning.jpg', b'0'),
(11, 'Tutor', 'tuto.jpg', b'0'),
(12, 'Gardener service', 'gardener.jpg', b'0'),
(13, 'Plumber', 'plumber.jpg', b'0'),
(14, 'Laundry', 'laun.jpg', b'0'),
(15, 'Pest control service', 'pest.png', b'0'),
(16, 'Car wash service', 'carwash.jpg', b'0'),
(17, 'RO repair and service', 'ro.jpg', b'0'),
(18, 'Solar energy consultant', 'solar.jpg', b'0'),
(19, 'Appliances repair and service', 'applience.jpg', b'0'),
(20, 'Water tanker supply', '1658923723495.jpg', b'0'),
(22, 'Home security', 'security.jpg', b'0'),
(23, 'Covid sanitization service', 'covid.jpg', b'0'),
(24, 'Real estate  broker', 'broker.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city`, `status`) VALUES
(1, 'VISNAGAR', b'0'),
(3, 'vadnagar', b'0'),
(4, 'mehsana', b'0'),
(5, 'unja', b'0'),
(6, 'vijapur', b'0'),
(7, 'kheralu', b'0'),
(8, 'gandhinagar', b'0'),
(9, 'valam', b'0'),
(10, 'magaroda', b'0'),
(11, 'bhlak', b'0'),
(12, 'kada', b'0'),
(13, 'hasanpur', b'0'),
(14, 'palanpur', b'0'),
(15, 'data', b'0'),
(16, 'disa', b'0'),
(17, 'kalol', b'0'),
(18, 'becharaji', b'0'),
(19, 'satlasana', b'0'),
(20, 'kadi', b'0'),
(21, 'jaska', b'0'),
(22, 'paldi', b'0'),
(23, 'siddhpur', b'1'),
(24, 'kamli', b'0'),
(25, 'sidhpur', b'0'),
(26, 'gothawa', b'0'),
(27, 'jk', b'1'),
(28, 'pal', b'0'),
(29, 'ahmdabad', b'0'),
(30, 'ahmdabad', b'0'),
(31, 'basna', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `complain_id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `register_id` int(50) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`complain_id`, `type`, `register_id`, `message`, `date`, `status`) VALUES
(2, 'ac repair and service complain', 11, 'not good', '2022-09-20 04:40:25', b'0'),
(3, 'home cleaning service complain', 11, 'zcx', '2022-09-20 05:05:44', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `subject`, `phone`, `message`, `status`) VALUES
(1, 'xyz', 'chaudharikreya@gmail.com', '0', '2147483647', 'hhh', b'0'),
(2, 'vidhi', 'chaudharikreya@gmail.com', 'very good', '6353625682', 'hiii', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(10) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `question`, `answer`, `status`) VALUES
(5, 'How Quickly Can Your Pest Control Team Come to My Home or office?', 'Our well-versed and experienced team is likely in your area more often than you would think. Really stressing the importance of transparent dynamics between customers and employees, we are easily reached and would happily provide you with a time frame as far as when we could come by for our initial inspection and evaluation.', b'0'),
(6, 'Do you offer a Guarantee?', 'We stand behind our service. If for any reason you are not 100% satisfied, please contact us within 48 hours so we can re-evaluate. We will do everything we can to meet your expectations. We must be provided at least 72 hours in the event we agree we should come back.', b'0'),
(7, 'Do you offer hourly service?', 'In some instances it may make sense to do an hourly service. We have a minimum of 4 hours when booking hourly services. This is generally reserved for very large homes or homes where we are only doing a couple of rooms or homes with a lot of clutter or dirt. Please note there is no guarantee on our hourly service and we cannot come back and re-clean if you do an hourly service.', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(10) NOT NULL,
  `register_id` int(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `register_id`, `message`, `date`, `status`) VALUES
(1, 11, 'very good site', '2022-09-19', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_getintouch`
--

CREATE TABLE `tbl_getintouch` (
  `get_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `pincode` int(6) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_getintouch`
--

INSERT INTO `tbl_getintouch` (`get_id`, `cat_id`, `name`, `email`, `mobileno`, `pincode`, `status`) VALUES
(1, 6, 'xyz', 'chaudharikreya119@gmail.com', '6353625682', 384315, b'1'),
(2, 6, 'xyz', 'chaudharikreya119@gmail.com', '6353625682', 384315, b'0'),
(3, 6, 'vidhi', 'chaudharikreya119@gmail.com', '6353625682', 384315, b'1'),
(4, 6, 'vidhi', 'chaudharikreya119@gmail.com', '6353625682', 384315, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email`, `password`, `mobile_no`, `type`, `status`) VALUES
(4, 'timesaver@gmail.com', 'admin', '9898201689', 'admin', b'0'),
(7, 'chaudharikreya119@gmail.com', 'krey@11', '6353625682', 'user', b'0'),
(8, 'chaudharikreya@gmail.com', 'kreya', '9898201689', 'user', b'0'),
(9, 'nivaaninfotech@gmail.com', 'bhavya', '8909099999', 'user', b'0'),
(10, 'chetanb@gmail.com', 'right', '9374283619', 'user', b'0'),
(11, 'bhavya', 'vidhi', '9832455666', 'user', b'0'),
(12, 'modividhi', 'vidhi', '9898201689', 'user', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(5) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `news` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `heading`, `news`, `status`) VALUES
(1, 'xyz', 'kreya', b'1'),
(2, 'kreya', 'i am a student', b'1'),
(3, 'xyz', 'vidhi', b'1'),
(4, 'TimeSavers service news', 'our new services with one year package will start in december', b'0'),
(5, 'TimeSavers service news', 'we have added 5% discount to the regular customer for every service.', b'0'),
(6, 'TimeSavers service news', 'our services will includes GST', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay`
--

CREATE TABLE `tbl_pay` (
  `card_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` int(6) NOT NULL,
  `card_type` varchar(15) NOT NULL,
  `name_card` varchar(30) NOT NULL,
  `card_no` bigint(16) NOT NULL,
  `expiry_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pay`
--

INSERT INTO `tbl_pay` (`card_id`, `email`, `amount`, `card_type`, `name_card`, `card_no`, `expiry_date`) VALUES
(7, 'bhavya', 567, 'visa', 'ss', 1222222222222222, '2022-03'),
(8, 'bhavya', 23, 'master card', 'kre', 1111111111111111, '2022-01'),
(9, 'bhavya', 299, 'visa', 'kre', 2222222222222222, '2022-02'),
(10, 'bhavya', 299, 'master card', 'kreya', 1111111111111111, '2022-11'),
(11, 'bhavya', 299, 'select card typ', 'xyz', 2222222222222222, '2022-12'),
(12, 'bhavya', 299, 'select card typ', 'k', 3333333333333333, '2022-03'),
(13, 'bhavya', 299, 'visa', 'nn', 8333333333333333, '2022-07'),
(14, 'bhavya', 299, 'master card', 'kkk', 3333333333333355, '2022-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pr`
--

CREATE TABLE `tbl_pr` (
  `pr_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `service_id` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pr`
--

INSERT INTO `tbl_pr` (`pr_id`, `name`, `email`, `mobileno`, `address`, `service_id`, `work`, `image`, `status`) VALUES
(2, 'kreya', 'chetanb@gmail.com', '6353625682', 'mangalam society', '42', '2 years', 'babysitter.jpg', 'approve'),
(12, 'vidhi', 'chetanb@gmail.com', '6353625682', 'mangalam society', '41', '2 years', 'babysitter.jpg', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(10) NOT NULL,
  `register_id` int(5) NOT NULL,
  `service_id` int(10) NOT NULL,
  `rating_score` int(10) NOT NULL,
  `message` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `register_id`, `service_id`, `rating_score`, `message`, `status`) VALUES
(10, 15, 57, 4, 'no', b'1'),
(11, 15, 37, 4, 'good work', b'0'),
(12, 14, 23, 4, 'the ac repair and service is very good.', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `register_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `otp` int(5) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`register_id`, `email`, `password`, `username`, `city`, `address`, `gender`, `image`, `mobile_no`, `otp`, `status`) VALUES
(11, 'chaudharikreya119@gmail.com', 'krey@11', 'bhavya', 'hhh', 'mangalam society', '', 'carpenter.jpg', '6353625682', 6737, b'1'),
(13, 'nivaaninfotech@gmail.com', 'bhavya', 'chetan', 'mjj', 'mangalam society', 'female', 'Babysitting-Business-Names-Ideas.jpg', '8909099999', 4503, b'0'),
(14, 'chetanb@gmail.com', 'right', 'chetan', 'mjj', 'visnagar', '', 'ac.jpg', '9374283619', 7817, b'1'),
(15, 'bhavya', 'vidhi', 'timesaver@gmail.com', 'hhh', 'visnagar', 'male', '381013707.jpg', '9832455666', 7751, b'1'),
(16, 'modividhi', 'vidhi', 'vidhi', 'vis', 'jkjjj', 'male', '', '9898201689', 9648, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(3) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `turnaround_time` varchar(50) NOT NULL,
  `pricing` varchar(50) NOT NULL,
  `whats_included` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `cat_id`, `service_name`, `price`, `discount`, `total_price`, `description`, `image`, `duration`, `turnaround_time`, `pricing`, `whats_included`, `status`) VALUES
(19, 6, 'General carpentry work', 1000, '10', '900', 'Are you looking to do some interior changes in your home? Do you want to fix that squeaky door or window? Hire the best carpenters near you to carry out custom home improvements, custom cabinetry, repair works and more.', 'carpenter 2.jpg', 'Depends on the scope of work', '2 hours', 'work based', 'Repair work,  Building new furniture', b'0'),
(20, 6, 'New furniture making', 500, '10', '450', 'Furniture making is an art and requires specialized tools and techniques. Having custom furniture made for yourself – instead of buying new ones – can also save lots of money.', 'furni.jpg', '1 week', '2 hours', 'work based', '  Building the furniture,  Varnishing , Delivery o', b'0'),
(21, 6, 'Office furniture assembly', 299, '0', '299', 'Furniture making is an art and requires specialized tools and techniques. Having custom furniture made for yourself – instead of buying new ones – can also save lots of money.', 'off.jpg', 'Depends on the scope of work', '2 hours', 'work based', 'Friendly 24/7 customer service, Affordable pricing', b'0'),
(22, 7, 'General electrical work', 900, '5', '855', 'Electricity is a fairly complicated (and hazardous) subject for most people and all kinds of electrical services and maintenance works should be left in the good hands of expert electricians.', 'ge ele.jpg', 'Depends on the scope of work', '2 hours', 'work based', '24/7  customer service', b'0'),
(23, 7, 'AC repair and service', 500, '5', '475', 'The best way to get optimum performance out of your air conditioner is to have it serviced regularly. To the minimum, get your AC serviced once before and once after summers.', 'ac.jpg', 'Depends on the scope of work', '2 hours', 'work based', ' Condenser coil cleaning , Cooling coil cleaning, ', b'0'),
(24, 7, 'Refrigerator  service', 299, '0', '299', 'Refrigerator is a complex machine. It is the hardest working home appliance that is operational round the clock, keeping your food fresh. Due to rigorous use and wear and tear, a refrigerator may develop issues like cooling problem, defrost problem, faulty wiring, broken drain plate, sparking from socket, door closing problem, drain blockage etc. that require refrigerator repair service.', 'fridge.png', 'Depends on the scope of work', '2 hours', 'Depends on scope of work', 'Diagnosing the problem', b'0'),
(25, 9, 'Nanny/baby caretaker', 900, '0', '900', 'Nanny is an individual who provide care for children in your family as a service. Generally a nanny will care for children while both parent work.', 'Nanny-Services.jpg', 'Depends on the scope of work', '5 hours', 'work based', 'Basic care,bathe,diaper change, prepare meals and ', b'0'),
(26, 11, 'personal tutor', 3000, '10', '2700', 'Reviewing classroom or curricula topics and assignments. Assisting students with homework, projects, test preparation, papers, research and other academic tasks. Working with students to help them understand key concepts, especially those learned in the classroom.', 'tu2.jpg', '2-3 hours', '2 hours', 'fixed', 'Reviewing classroom or curricula topics and assign', b'0'),
(27, 12, 'gardener', 299, '0', '299', 'Gardener responsibilities include monitoring the health of all plants and greenspaces, watering and feeding plants, trimming trees and shrubs, fertilizing and mowing lawns, weeding gardens and keeping green spaces and walkways clear of debris and litter.', 'g.jpg', '2-3 hours', '2 hours', 'fixed', 'maintain the beauty of plants, outdoor grounds, an', b'0'),
(28, 16, 'car cleaning', 500, '5', '475', 'we provide services like car washing, cleaning the window,vaccuming the seats by the professionals.', 'car-washing-service-500x500.png', '2-3 hours', '2 hours', 'fixed', 'car washing, cleaning the window,vaccuming the sea', b'0'),
(29, 17, 'RO installation', 299, '0', '299', 'RO installation takes just an hour or two and must be carried out following the manufacturer’s guidelines.', 'rr.jpg', '2-3 hours', '2 hours', 'work based', '24/7  customer service', b'1'),
(31, 17, 'RO installation', 299, '0', '299', 'RO installation takes just an hour or two and must be carried out following the manufacturer’s guidelines.', 'ro2.jpg', '2-3 hours', '2 hours', 'work based', '24/7  customer service', b'0'),
(32, 18, 'Solar rooftop installation', 10000, '5', '9500', 'we provide complete guidelines and service for solar panel installation.', 'istockphoto-1192834365-612x612.jpg', 'Depends on work', '2 hours', 'work based', '24/7  customer service, affordable pricing', b'0'),
(33, 20, 'water tanker supply', 300, '0', '300', 'we provide 4000 liter water through tanker.', '1658923723495.jpg', '1-2 hours', '1 hour', 'fixed', 'only water supply', b'0'),
(34, 24, 'broker or agent', 2000, '5', '1900', 'A broker, also referred to as a real estate agent or realtor, is an individual who acts as an intermediary between the seller and the buyer of a property. Brokers can be licensed commercial or residential real estate experts.', 'real.jpg', 'Depends on the scope of work', '2 hours', 'Depends on scope of work', 'provide best advise,24/7 service', b'0'),
(37, 14, 'Wash and fold', 79, '0', '79', 'Getting no time to do your laundry? Try our wash and fold services. Just dump all your clothes that don’t require ironing into a separate bag. We’ll collect it from you, clean, fold, and give it back to you at the convenience of your doorstep.', 'washandfold.png', '2-3 hours', '2 hours', 'fixed', 'Washing,  Drying , Folding', b'0'),
(38, 14, 'Wash and iron', 99, '0', '99', 'We use specialized steam ironing process that adjusts the temperature and pressure to suit the type of garment being processed. Thus providing maximum life for your favorite garments.', 'How-to-Iron-Shirts-and-Pants-Correctly.jpg', '2-3 hours', '2 hours', 'fixed', 'Washing,  Drying ,ironing, Folding', b'0'),
(39, 13, 'All plumbing work repair and service', 199, '0', '199', 'You may have experience in fixing a lot of things at home but plumbing isn’t everyone’s cup of tea. Plumbing issues such as clogged drains, leaky faucets, broken or damaged pipelines etc. can be a homeowner’s nightmare.', 'plumber-service-500x500.jpeg', '2-3 hours', '2 hours', 'work based', 'Diagnosing the problem', b'0'),
(40, 13, 'Underground water tank cleaning', 799, '0', '799', 'Since underground water tanks stay dormant for longer periods of time and get replenished on a less frequent basis, they tend to accumulate higher density of dirt and sediments. Just book a case here and let our experts', 'water-tank-cleaning.jpg', '2-3 hours', '2 hours', 'fixed', '24/7  customer service', b'0'),
(41, 13, 'Small bathroom fittings installation', 199, '0', '199', 'A great bathroom design plays an important role in comfort factor. More importantly, bathroom fittings should be selected with the interior décor of the bathroom in mind. Bathroom fittings come in different shapes and configuration depending upon their applications.', 'bathroom-fittings-500x500.jpg', '2-3 hours', '2 hours', 'fixed', 'Faucet installation , Jet wash installation,  Drai', b'0'),
(42, 15, 'General pest control ', 800, '5', '760', 'If you’re having pest related problems at your home, General Pest Control is the best solution to help you get rid of all kinds of pests. Be it cockroaches, ants, silverfish, spiders, our pest control services can help you get rid of all of them.', 'household-pest-control-service-500x500.jpg', '2-3 hours', '2 hours', 'fixed', '  Cockroaches , Spiders , House moths , Centipedes', b'0'),
(43, 15, 'Termite control', 799, '0', '799', 'Termite problems are something that don’t occur on a very regular basis but once developed, it needs to be treated professionally. Termite control, sometimes referred as termite damage or termite prevention requires special tools & equipment,', 'termite-control-500x500.png', 'Depends on the scope of work', '1 hour', 'fixed', 'Termite control', b'0'),
(44, 15, 'Bed bug control', 599, '0', '599', 'There’s a reason people warn you before going to bed. They say, “Don’t let the bed bugs bite\". Bed bugs are pure parasites that feed on their host’s blood (in this case, you). Their bites can cause various health hazards such as extreme itches and skin problems.', 'Bedbugs-Control.jpg', '2-3 hours', '2 hours', 'fixed', 'bed bug control', b'0'),
(45, 23, 'Home Disinfection and Sanitization', 599, '0', '599', 'To prevent the spread of COVID 19, household members are advised to regularly clean and disinfect high-touch surfaces daily in household common areas (e.g. tables, hard-backed chairs, doorknobs, light switches, phones, tablets, touch screens, remote controls, keyboards, handles, desks, toilets, sinks). Book our sanitization experts to get your home thoroughly disinfected and prevent any contamination.', '381013707.jpg', '2-3 hours', '2 hours', 'fixed', 'EPA Approved Disinfectants  ,Equipped with PPE Kit', b'0'),
(46, 23, 'Small Offices  Disinfection and Sanitization', 699, '0', '699', ' To prevent the spread of COVID 19, offices and shop owners are advised to regularly clean and disinfect high-touch surfaces frequently common areas (e.g. tables, hard-backed chairs, doorknobs, light switches, phones, tablets, touch screens, remote controls, keyboards, handles, desks, toilets, sinks). Book our sanitization experts to get your offices and shops thoroughly disinfected and prevent any contamination.', '24622.jpg', '2-3 hours', '2 hours', 'fixed', 'EPA Approved Disinfectants  ,Equipped with PPE Kit', b'0'),
(47, 23, 'Car Disinfection and Sanitization', 499, '0', '499', 'To prevent the spread of COVID 19, vehicle owners are advised to regularly clean and disinfect high-touch surfaces frequently (e.g. car interiors, steering wheel, seat covers, dashboard and controls, handles, windows, and exteriors). Book our sanitization experts to get your car thoroughly disinfected and prevent any chance of contamination.', '0a38023b79504bcfb7db3eda4098a1df-shutterstock_1699', '2-3 hours', '1 hour', 'fixed', 'car sanitization', b'1'),
(48, 15, 'Car Disinfection and Sanitization', 499, '0', '499', 'To prevent the spread of COVID 19, vehicle owners are advised to regularly clean and disinfect high-touch surfaces frequently (e.g. car interiors, steering wheel, seat covers, dashboard and controls, handles, windows, and exteriors). Book our sanitization experts to get your car thoroughly disinfected and prevent any chance of contamination.', '0a38023b79504bcfb7db3eda4098a1df-shutterstock_1699', '2-3 hours', '1 hour', 'fixed', 'car sanitization', b'1'),
(49, 23, 'Car Disinfection and Sanitization', 499, '0', '499', 'To prevent the spread of COVID 19, vehicle owners are advised to regularly clean and disinfect high-touch surfaces frequently (e.g. car interiors, steering wheel, seat covers, dashboard and controls, handles, windows, and exteriors). Book our sanitization experts to get your car thoroughly disinfected and prevent any chance of contamination.', 'car dis.jpg', '2-3 hours', '1 hour', 'fixed', 'car sanitization', b'0'),
(50, 22, 'Smart Device Installation', 1000, '5', '950', 'we provide services like Smart Lock Installation, Smart Thermostat Installation, Video Doorbell Installation, Wi-Fi Router Setup ,Smart Home Hub Setup ,Smart Security Cam Installation, Smart Device Installation', 'smartsecurityinstallation3.jpg', 'Depends on the scope of work', '2 hours', 'work based', 'Smart Lock Installation Smart Thermostat Installat', b'0'),
(51, 22, 'CCTV Camera repair ', 300, '0', '300', 'CCTV camera system is responsible for capturing visual information and transmit the data over cables to the recorder. The CCTV camera may also face issues such as fuzzy picture or low-quality images.', 'cctv.jpg', '2-3 hours', '2 hours', 'work based', '24/7  customer service, affordable pricing', b'0'),
(52, 22, 'Smart Lock Installation', 299, '0', '299', 'our professional will arrive at your home to prepare and remove your current lock. The pro will bring all the necessary tools to install your new smart lock and any batteries that are required. Finally, the pro will complete installation by connecting the device to your wifi network and completing setup through any necessary apps.', 'istockphoto-1187658587-612x612.jpg', '2-3 hours', '2 hours', 'work based', 'smart lock installation', b'0'),
(53, 19, 'General home appliance repair', 800, '5', '760', 'We are surrounded by appliances in our homes. They are constantly under use and make our lives more than just easier. But over time, and with regular use, they tend to breakdown or malfunction.', 'Home-Appliance-Background-PNG.png', 'Depends on the scope of work', '2 hours', 'work based', 'Diagnosing the problem', b'0'),
(54, 19, 'DTH Installation or DTH service', 300, '5', '285', 'we provide service of DTH installation', 'dth.jpg', '1-2 hours', '1 hour', 'fixed', '24/7  customer service', b'0'),
(55, 19, 'Microwave repair and service', 299, '0', '299', 'we provide services like microwave repair and service.', 'microwave.jpg', '2-3 hours', '2 hours', 'work based', 'microwave repair and service', b'0'),
(56, 8, 'maid for cleaning service', 2000, '4', '1992', 'Maids are responsible for keeping residences and commercial establishments clean and tidy. They perform various cleaning tasks, which include mopping, vacuuming and sweeping floors, washing carpets, replacing dirty linen, and wiping down kitchen counters.', 'hh.jpg', 'Depends on the scope of work', '2 hours', 'fixed', 'mopping,cleaning,washing,sweeping floors.', b'0'),
(57, 8, 'cooking', 299, '0', '299', ' a female servent who dresses provisions and assist you in cooking,keeping kitchen pots,pans,and work surface clean and in good condition. ', 'srvs-cook.jpg', '2-3 hours', '2 hours', 'fixed', 'cooking,keep your kitchen clean', b'0'),
(58, 10, 'Home cleaning', 4000, '10', '3600', 'Making sure that your home always stays clean is no easy job. That’s why forty seven percent of the couples argue about home cleaning. Well, we got your back.', 'home-deep-cleaning-services-in-delhi.jpg', '4-5 hours', '2 hours', 'work based', ' Bathroom cleaning,  Kitchen cleaning,  Bedroom cl', b'0'),
(59, 10, 'Kitchen cleaning', 599, '0', '599', 'Everybody likes a get-together. So do germs, roaches and pests. And what better place than a dirty kitchen with hidden dirt, grime and moisture that gets collected over time. Kitchen is the heart of your home.', 'kitchen-cleaning.jpg', '2-3 hours', '2 hours', 'fixed', 'moping ,dishwashing,dusting,clean the platform', b'0'),
(60, 10, 'Bathroom cleaning', 299, '0', '299', 'Do you feel fresh(er) when stepping into or out of your bathroom? What does your bathroom mirror tell you? Do you remember the actual color of your bathroom tiles? If your answer is no, then you are in need of some serious bathroom cleaning.', 'cl-bathroom.jpg', '2-3 hours', '1 hour', 'fixed', 'Tiles scrubbing ,   Cleaning of electrical fitting', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `razorpay`
--
ALTER TABLE `razorpay`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_getintouch`
--
ALTER TABLE `tbl_getintouch`
  ADD PRIMARY KEY (`get_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_pay`
--
ALTER TABLE `tbl_pay`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `tbl_pr`
--
ALTER TABLE `tbl_pr`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `razorpay`
--
ALTER TABLE `razorpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `book_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  MODIFY `complain_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_getintouch`
--
ALTER TABLE `tbl_getintouch`
  MODIFY `get_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pay`
--
ALTER TABLE `tbl_pay`
  MODIFY `card_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pr`
--
ALTER TABLE `tbl_pr`
  MODIFY `pr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `register_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
