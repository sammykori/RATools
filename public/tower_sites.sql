-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 09:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nca_std_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tower_sites`
--

CREATE TABLE `tower_sites` (
  `company` varchar(64) NOT NULL,
  `site_id` int(16) NOT NULL,
  `district` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `status` varchar(32) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tower_sites`
--

INSERT INTO `tower_sites` (`company`, `site_id`, `district`, `location`, `status`, `lat`, `lng`) VALUES
('ATC TOWER', 600657, 'Wasa West', 'ABOSO', 'operational', 5.369200, -1.484000),
('ATC TOWER', 601192, 'Nzema', 'AXIM_2', 'operational', 4.870500, -2.238600),
('ATC TOWER', 601551, 'Bibiani-Anhwiaso-Bekwai', 'HUMJIBRE', 'operational', 6.147600, -2.264400),
('ATC TOWER', 601216, 'wassa amenfi', 'WASSA _AKROPONG', 'operational', 5.783700, -2.085200),
('ATC TOWER', 601240, 'Wasa West', 'tarkwa_4', 'operational', 5.303800, -1.994000),
('ATC TOWER', 601552, 'Shama Ahanta East', 'assorkwa', 'operational', 5.050700, -1.661200),
('ATC TOWER', 601648, 'Wasa West', 'view_point', 'operational', 5.286130, -2.038380),
('ATC TOWER', 601558, 'Nzema', 'nyame', 'operational', 5.512600, -2.537700),
('ATC TOWER', 601561, 'Wassa Amenfi', 'wasa dadiso', 'operational', 5.870500, -2.002600),
('ATC TOWER', 601932, 'Wasa West', 'benso_subrinso', 'operational', 5.207400, -1.885000),
('ATC TOWER', 601994, 'Juabiso-Bia', 'nkatieso', 'operational', 6.435590, -2.772256),
('ATC TOWER', 601971, 'Bibiani-Anhwiaso-Bekwai', 'bibiani_6', 'operational', 6.451944, -2.323333),
('ATC TOWER', 601992, 'Mporhor Wassa', 'essamang', 'operational', 5.351750, -1.674010),
('ATC TOWER', 602060, '', 'boinso', 'operational', 5.554720, -2.726400),
('ATC TOWER', 601757, 'Wa', 'billaw', 'operational', 10.921650, -2.679910),
('ATC TOWER', 601765, 'Wa', 'nagim_coton', 'operational', 10.077360, -2.492500),
('ATC TOWER', 601769, 'Sissala', 'pien', 'operational', 10.730590, -1.963090),
('ATC TOWER', 601931, 'Sissala', 'challo', 'operational', 10.652389, -1.929750),
('ATC TOWER', 601105, 'Jirapa', 'babile', 'operational', 10.526340, -2.839960),
('ATC TOWER', 601456, 'Nadowli', 'bussie', 'operational', 10.481070, -2.500890),
('ATC TOWER', 601103, 'Nadowli', 'naro', 'operational', 10.330190, -2.465760),
('ATC TOWER', 601100, 'Wa', 'busa', 'operational', 10.020430, -2.388930),
('ATC TOWER', 601101, 'Wa', 'chira', 'operational', 10.110920, -2.571760),
('ATC TOWER', 601762, 'Wa', 'wa_konta', 'operational', 10.050810, -2.493410),
('ATC TOWER', 601102, 'Nadowli', 'sambo', 'operational', 10.266520, -2.560650),
('ATC TOWER', 601098, 'Wa', 'lesuayri_ga', 'operational', 9.791540, -2.493120),
('ATC TOWER', 601699, 'Wa', 'dorimon', 'operational', 10.035470, -2.689240),
('ATC TOWER', 601759, 'Sissala', 'suke', 'operational', 10.848810, -2.513450),
('ATC TOWER', 601758, 'Nadowli', 'tabeasi', 'operational', 10.347900, -2.317870),
('ATC TOWER', 601109, 'Sissala', 'gwallu', 'operational', 10.979900, -2.224730),
('ATC TOWER', 601764, 'Wa', 'kpaguri_east', 'operational', 10.038440, -2.509590),
('ATC TOWER', 601430, 'Wa', 'wa_3', 'operational', 10.067010, -2.509800),
('ATC TOWER', 601107, 'Lambussie', 'hamile', 'operational', 10.995870, -2.743480),
('ATC TOWER', 601108, 'Sissala', 'wiiro', 'operational', 10.980040, -2.508600),
('ATC TOWER', 601810, 'Wa', 'wechiau', 'operational', 9.825840, -2.669750),
('ATC TOWER', 601431, 'Wa', 'wa_4', 'operational', 10.055550, -2.499770),
('ATC TOWER', 601432, 'Wa', 'wa_5', 'operational', 10.063690, -2.482870),
('ATC TOWER', 601761, 'Jirapa', 'karni', 'operational', 10.670140, -2.632190),
('ATC TOWER', 601111, 'Sissala', 'walebele', 'operational', 10.513460, -1.964640),
('ATC TOWER', 601110, 'Nadowli', 'kaleo', 'operational', 10.173720, -2.547310),
('ATC TOWER', 601044, 'Nadowli', 'dafiama', 'operational', 10.417620, -2.562320),
('ATC TOWER', 600502, 'Bibiani-Anhwiaso-Bekwai', 'bibiani_1', 'operational', 6.460020, -2.331010),
('ATC TOWER', 600716, 'Ahanta West', 'apowa', 'operational', 4.897100, -1.826300),
('ATC TOWER', 600719, 'Ahanta West', 'busua', 'operational', 4.810500, -1.942300),
('ATC TOWER', 601197, 'Nzema', 'bosomoiso_2', 'operational', 6.212600, -2.461800),
('ATC TOWER', 601206, 'Jomoro', 'ezinzinbo', 'operational', 5.022100, -2.717100),
('ATC TOWER', 601208, 'Shama Ahanta East', 'kojokrom', 'operational', 4.959800, -1.728200),
('ATC TOWER', 601210, 'Wassa West', 'nsuaem', 'operational', 4.999700, -2.025000),
('ATC TOWER', 601211, 'Nzema', 'sanzule', 'operational', 4.960800, -2.453200),
('ATC TOWER', 601528, 'Nzema', 'essiama_2', 'operational', 4.937100, -2.347100),
('ATC TOWER', 601529, 'Mporhor Wassa West', 'ituma_2(supow dunkwa)', 'operational', 5.116600, -10000.000000),
('ATC TOWER', 601536, 'Wassa West', 'tarkwa_5', 'operational', 5.317880, -1.978140),
('ATC TOWER', 601537, 'Wassa Amenfi', 'kwabeng', 'operational', 5.872400, -2.405800),
('ATC TOWER', 601538, 'Wassa West', 'tarkwa_6', 'operational', 5.293030, -1.982370),
('ATC TOWER', 601550, 'Wassa West', 'tarkwa_7', 'operational', 5.271500, -2.001300),
('ATC TOWER', 601568, 'Whanta West', 'apowa_2', 'operational', 4.892200, -1.811400),
('ATC TOWER', 601640, 'Shama Ahanta East', 'ekuasi_prison', 'operational', 4.930167, -1.725833),
('ATC TOWER', 601642, 'Ahanta West', 'kajabill', 'operational', 4.913600, -1.835500),
('ATC TOWER', 601643, 'Ahanta West', 'ewusiajo', 'operational', 4.896000, -1.902000),
('ATC TOWER', 601641, 'Juabeso-Bia', 'kofikrom', 'operational', 6.343460, -2.901760),
('ATC TOWER', 601646, 'Wassa West', 'wassa_benso', 'operational', 5.156700, -1.893100),
('ATC TOWER', 601666, 'Sefwi Wiawso', 'bondaye', 'operational', 5.399639, -2.169583),
('ATC TOWER', 601970, 'bibiani-anhwiaso-bekwai', 'bibiani_7', 'operational', 6.450210, -2.308430),
('ATC TOWER', 0, 'shama ahanta east', 'windy_ridge', 'operational', 4.907250, -1.760583),
('ATC TOWER', 600565, 'jomoro', 'elubo', 'operational', 5.284900, -2.773100),
('ATC TOWER', 601978, 'wassa west', 'efuanta_tar', 'operational', 5.284070, -2.003610),
('ATC TOWER', 600600, 'wassa amenfi', 'kukuruku', 'operational', 5.765000, -2.015000),
('ATC TOWER', 600711, 'sefwi wiawso', 'asawinso', 'operational', 6.426440, -2.706430),
('ATC TOWER', 601205, 'juabeso-bia', 'essam_dbiso', 'operational', 6.664470, -3.105590),
('ATC TOWER', 601212, 'sefwi wiawso', 'sefwi_asafo', 'operational', 6.393700, -2.656700),
('ATC TOWER', 601213, 'sefwi wiawso', 'sefwi_bodi', 'operational', 6.222100, 2.751700),
('ATC TOWER', 601214, 'jomoro', 'tikibo', 'operational', 5.059000, -2.689000),
('ATC TOWER', 601225, 'wassa amenfi', 'moseaso', 'operational', 5.838300, -2.509700),
('ATC TOWER', 601244, 'wassa west', 'wassa_agona', 'operational', 5.214700, -2.024800),
('ATC TOWER', 601351, 'juabeso-bia', 'kodjoaba', 'operational', 6.669870, -3.183220),
('ATC TOWER', 601554, 'juabeso-bia', 'old_debiso(elluokrom)', 'operational', 6.528600, -2.934700),
('ATC TOWER', 601556, 'juabeso-bia', 'kwasikrom', 'operational', 6.187700, -2.955600),
('ATC TOWER', 601547, 'juabeso-bia', 'afere', 'operational', 6.317730, -2.811330),
('ATC TOWER', 601564, 'sefwi wiawso', 'nsawora', 'operational', 6.149900, -2.603600),
('ATC TOWER', 601569, 'wassa west', 'mile_6 GAG', 'operational', 5.243420, -2.069040),
('ATC TOWER', 601571, 'aowin-suaman', 'new_yakase', 'operational', 5.797800, -2.858700),
('ATC TOWER', 601660, 'wassa west', 'abos bampiso', 'operational', 5.415960, -1.927620),
('ATC TOWER', 601644, 'bibiani-anhwiaso-bekwai', 'sefwi_merwa', 'operational', 6.288200, -2.136350),
('ATC TOWER', 601649, 'wassa west', 'nsuta_akyim', 'operational', 5.250028, -1.979417),
('ATC TOWER', 601657, 'jomoro', 'anhwiaso', 'operational', 6.331722, -2.256278),
('ATC TOWER', 601979, 'wassa west', 'UMAT _Tarkwa', 'operational', 5.298800, -2.001330),
('ATC TOWER', 601980, 'wassa west', 'bogoso_junction', 'operational', 5.336210, -1.978430),
('ATC TOWER', 601317, 'east akim', 'asafo ER', 'operational', 6.177910, -0.473260),
('ATC TOWER', 601527, 'kwaebibirem', 'akim takyiman', 'operational', 6.157760, -0.670900),
('ATC TOWER', 601582, 'birim central', 'oda nkwanta', 'operational', 5.975570, -1.018040),
('ATC TOWER', 601593, 'kwahu south', 'obo_2', 'operational', 6.601640, -0.778950),
('ATC TOWER', 601597, 'akwapim south', 'nsawam_7(aboabo)', 'operational', 5.809120, -10000.000000),
('ATC TOWER', 601599, 'akwapim south', 'nsawam_5 (ankoa doboro)', 'operational', 5.778240, -0.335950),
('ATC TOWER', 601669, 'new juaben', 'okorase', 'operational', 6.033444, -0.261583),
('ATC TOWER', 601844, 'wast akim', 'bomanasa', 'operational', 6.001630, -0.767690),
('ATC TOWER', 601851, 'manya krobo', 'somanya_3', 'operational', 6.109472, -0.016278),
('ATC TOWER', 601865, 'afram plain', 'forifori', 'operational', 6.837417, -0.327389),
('ATC TOWER', 601870, 'yilo krobo', 'agogo ER', 'operational', 6.244444, -0.229444),
('ATC TOWER', 601872, 'wast akim', 'akanteng', 'operational', 6.009660, -0.700570),
('ATC TOWER', 601878, 'wast akim', 'ekoso', 'operational', 5.905667, -0.726056),
('ATC TOWER', 600652, 'asuogyaman', 'agomanya', 'operational', 6.155136, 0.016789),
('ATC TOWER', 601178, 'birim north', 'ofoase', 'operational', 6.168330, -1.136780),
('ATC TOWER', 601852, 'yilo krobo', 'agomanya_2 (bukuno)', 'operational', 6.148056, 0.020861),
('ATC TOWER', 601860, 'kwahu south', 'bepom', 'operational', 6.599944, -0.714944),
('ATC TOWER', 601859, 'kwahu south', 'burukuwa', 'operational', 6.668260, -0.696630),
('EATON TOWERS GHANA LIMITED', 0, 'sunyani metropolis', 'new dormaa', 'new installation', 7.343080, -2.298470),
('HTG MANAGED SERVICES LIMITED', 1003, '', 'macarthy hills', 'operational', 5.566650, -0.297390),
('HTG MANAGED SERVICES LIMITED', 1120, '', 'atomic junction', 'operational', 5.668889, -0.181664),
('HTG MANAGED SERVICES LIMITED', 1172, '', 'awudome estates', 'operational', 5.536660, -0.268890),
('HTG MANAGED SERVICES LIMITED', 1958, '', 'ayigbe town', 'operational', 5.556290, -0.355630),
('HTG MANAGED SERVICES LIMITED', 1179, '', 'james town', 'operational', 5.536945, -0.212272),
('HTG MANAGED SERVICES LIMITED', 1129, '', 'manhean', 'operational', 5.646940, -0.342490),
('HTG MANAGED SERVICES LIMITED', 1127, '', 'new weija(gicel estates)', 'operational', 5.551700, 0.346630),
('HTG MANAGED SERVICES LIMITED', 1018, '', 'madina', 'operational', 5.664800, -0.164460),
('HTG MANAGED SERVICES LIMITED', 1912, '', 'korle gonno-anakazo', 'operational', 5.531393, -0.229444),
('HTG MANAGED SERVICES LIMITED', 1117, '', 'yellow house', 'operational', 5.639730, -0.266600),
('ATC TOWER', 601750, 'BUILSA', 'fumbesi', 'operational', 10.453722, -1.304778),
('ATC TOWER', 601760, 'jirapa-lambussie', 'toupare', 'operational', 10.759830, -2.702010),
('ATC TOWER', 600589, 'akwapim south', 'nsawam', 'operational', 5.800890, -0.346220),
('ATC TOWER', 600635, 'akwapim north', 'aburi', 'operational', 5.859100, -0.166864),
('ATC TOWER', 600666, 'akwapim north', 'akropong', 'operational', 5.979100, -0.088280),
('ATC TOWER', 600671, 'akwapim north', 'mamfe', 'operational', 5.942220, -0.119790),
('ATC TOWER', 600697, 'akwapim north', 'akuapim-mampong', 'operational', 5.910336, -0.143250),
('ATC TOWER', 601229, 'akwapim north', 'awukugua', 'operational', 6.003611, -0.079806),
('ATC TOWER', 601293, 'akwapim south', 'nsawam_3', 'operational', 5.810320, -0.334940),
('ATC TOWER', 601294, 'akwapim south', 'nsawam_4', 'operational', 5.811100, -0.361500),
('ATC TOWER', 601296, 'akwapim north', 'adawso', 'operational', 5.946280, -0.210110),
('ATC TOWER', 601670, 'suhum-kroboa-coalter', 'asuboi', 'operational', 5.948620, -0.415380),
('ATC TOWER', 601969, 'kwahu south', 'adowso', 'operational', 6.712760, -0.509270),
('ATC TOWER', 601957, 'akwapim south', 'adoagyiri_2', 'operational', 5.816873, -0.356001),
('ATC TOWER', 602042, 'akwapim south', 'adoagyiri_3', 'operational', 5.820920, -0.361925),
('ATC TOWER', 600576, 'dangbe west', 'agomeda', 'operational', 5.980010, 0.002520),
('ATC TOWER', 600581, 'asuogyaman', 'asikuma', 'operational', 6.429870, 0.169200),
('ATC TOWER', 600641, 'yilo krobo', 'somanya', 'operational', 6.120450, -0.013294),
('ATC TOWER', 600625, 'asuogyaman', 'akosombo_2', 'operational', 6.285200, 0.054570),
('ATC TOWER', 601292, 'yilo krobo', 'nkorankan', 'operational', 6.129520, -0.209850),
('ATC TOWER', 601671, 'manya krobo', 'bukunor', 'operational', 6.229583, -0.105667),
('ATC TOWER', 601857, 'yilo krobo', 'obawale', 'operational', 6.210500, -0.194111),
('ATC TOWER', 601862, 'manya krobo', 'somanya_4', 'operational', 6.127833, -0.015167),
('ATC TOWER', 601892, 'asuogyaman', 'akosombo ATL', 'operational', 6.267417, 0.069056),
('ATC TOWER', 601933, 'asuogyaman', 'adumasa', 'operational', 6.363640, 0.072436),
('SCANCOM/MTN GHANA LIMITED', 600655, 'shama ahanta east', 'takoradi_2', 'operational', 4.892180, -1.756000),
('SCANCOM/MTN GHANA LIMITED', 600727, 'ahanta west', 'taywood_min', 'operational', 5.274000, -2.039419),
('AIRTEL GHANA LIMITED', 0, 'suhum-kroboa-coalter', 'teacher mante', 'new installation', 5.904330, 0.384670),
('AIRTEL GHANA LIMITED', 0, 'kwaebibrem', 'atobriso', 'new installation', 6.311550, 0.919180),
('AIRTEL GHANA LIMITED', 0, 'awutu senya', 'kasoa millenium city', 'new installation', 5.511620, 0.432960),
('ATC TOWER', 600537, 'bibiani-anhwiaso-bekwai', 'bibiani_3', 'operational', 6.459990, -2.319630),
('ATC TOWER', 600596, 'shama ahanta east', 'takoradi_1', 'operational', 4.885180, -1.759770),
('ATC TOWER', 601143, 'jomoro', 'tikobo_No_2', 'operational', 5.085300, -2.529900),
('ATC TOWER', 601202, 'jomoro', 'elubo_2', 'operational', 5.291600, -2.771600),
('ATC TOWER', 601207, 'wassa west', 'huni_valley', 'operational', 5.470600, -1.912900),
('ATC TOWER', 601222, 'jomoro', 'nzulezu', 'operational', 4.988700, -2.592800),
('ATC TOWER', 601224, 'jomoro', 'jewi_wharf', 'operational', 5.086000, -2.939300),
('ATC TOWER', 601532, 'shama ahanta east', 'takoradi_5 (rooftop)', 'operational', 4.900150, -1.759900),
('ATC TOWER', 601544, 'juabiso-bia', 'essem_sikma', 'operational', 6.679660, -3.079880),
('ATC TOWER', 601654, 'juabiso-bia', 'amoaya', 'operational', 6.242639, -2.939278),
('ATC TOWER', 601656, 'jomoro', 'takinta', 'operational', 5.052528, -2.809083),
('ATC TOWER', 601661, 'mpohor wassa west', 'atieku', 'operational', 5.568444, -1.693083),
('MILLICOM GHANA LIMITED', 1842, '', 'atasomanso', 'new installation', 6.646392, -1.631945),
('MILLICOM GHANA LIMITED', 1274, '', 'breman', 'new installation', 6.756221, -1.636714),
('MILLICOM GHANA LIMITED', 1285, '', 'ahodwo', 'new installation', 6.657781, 1.620002),
('MILLICOM GHANA LIMITED', 1293, '', 'atimatim-tuaabuo', 'new installation', 6.769691, -1.612621),
('MILLICOM GHANA LIMITED', 1287, '', 'deduako', 'new installation', 6.656736, -1.545703),
('MILLICOM GHANA LIMITED', 1288, '', 'esssereso', 'new installation', 6.624949, -1.561180),
('MILLICOM GHANA LIMITED', 1279, '', 'asokore mampong', 'new installation', 6.711796, -1.565830),
('MILLICOM GHANA LIMITED', 1292, '', 'nyankyrenease', 'new installation', 6.714217, -1.674300),
('MILLICOM GHANA LIMITED', 1289, '', 'kokoben', 'new installation', 6.625809, -1.655273),
('MILLICOM GHANA LIMITED', 1212, '', 'buokrom', 'new installation', 6.722752, -1.595468),
('MILLICOM GHANA LIMITED', 1281, '', 'fumesua', 'new installation', 6.710587, -1.518622),
('ATC TOWER', 601894, 'ho municipal', 'klave', 'Operational', 6.813270, 0.551920),
('ATC TOWER', 601917, 'ho municipal', 'nyive', 'operational', 6.757890, 0.579940),
('ATC TOWER', 601185, 'ho municipal', 'tanyigbe', 'operational', 6.691840, 0.522480),
('ATC TOWER', 601891, 'keta', 'agbledome', 'operational', 5.779530, 0.733610),
('ATC TOWER', 601517, 'keta', 'anyako', 'operational', 6.008430, 0.902860),
('ATC TOWER', 601902, 'ho municipal', 'wumenu', 'operational', 6.578080, 0.585980),
('ATC TOWER', 600559, 'south dayi', 'peki', 'operational', 6.532710, 0.226020),
('ATC TOWER', 601526, 'kpando', 'peki_dzake', 'operational', 6.501960, 0.200530),
('ATC TOWER', 601162, 'kpando', 'dzemeni', 'operational', 6.606460, 0.171300),
('ATC TOWER', 600717, 'ho municipal', 'amedzope', 'operational', 6.842210, 0.432990),
('ATC TOWER', 601982, 'ho municipal', 'ho_kabakaba', 'operational', 6.611720, 0.456940),
('ATC TOWER', 601986, 'ho municipal', 'ho_8', 'operational', 6.625139, 0.483250),
('ATC TOWER', 601603, 'ho municipal', 'ho_6', 'operational', 6.611240, 0.487700),
('ATC TOWER', 601519, 'ketu north', 'ehie', 'operational', 6.149790, 1.002600),
('ATC TOWER', 601893, 'akatsi', 'gefia', 'operational', 6.157960, 0.854480),
('ATC TOWER', 601890, 'akatsi', 'yaluvi', 'operational', 6.114440, 0.788500),
('ATC TOWER', 600558, 'north tongu', 'adidome', 'operational', 6.087200, 0.506900),
('ATC TOWER', 601900, 'akatsi', 'dagbamate', 'operational', 6.055630, 0.824550),
('ATC TOWER', 601909, 'ho municipal', 've-deme', 'operational', 6.956360, 0.473050),
('ATC TOWER', 601573, 'hohoe municipal', 'akpafu', 'operational', 7.274664, 0.470970),
('ATC TOWER', 601521, 'nkwanta', 'sibi_hill', 'operational', 8.575900, 0.242350),
('ATC TOWER', 600730, 'kadjebi', 'dzindzinso', 'operational', 7.601944, 0.511083),
('ATC TOWER', 600733, 'krachi east', 'dormabin', 'operational', 7.841020, 0.310200),
('ATC TOWER', 601513, 'kadjebi', 'kedjebi_2', 'operational', 7.528800, 0.477010),
('ATC TOWER', 600732, 'kadjebi', 'pampawie', 'operational', 7.811167, 0.566361),
('ATC TOWER', 601182, 'jasikan', 'worawora', 'operational', 7.513670, 0.372520),
('ATC TOWER', 601262, 'krachi west', 'chinduri', 'operational', 8.145190, -0.155670),
('ATC TOWER', 600734, 'hohoe ', 'likpr_mate', 'operational', 7.182510, 0.603640),
('ATC TOWER', 600731, 'kadjebi', 'dodi_papase', 'operational', 7.728556, 0.511500),
('ATC TOWER', 601516, 'nkwanta south', 'nkwanta_VR2', 'operational', 8.268110, 0.519900),
('ATC TOWER', 601512, 'jasikan', 'jasikan_2', 'operational', 7.429890, 0.427450),
('ATC TOWER', 600569, 'nkwanta', 'nkwanta_VR', 'operational', 8.255770, 0.514960),
('ATC TOWER', 601905, 'nkwanta', 'bonakye', 'operational', 8.384270, 0.420970),
('ATC TOWER', 601895, 'hohoe municipal', 'logba adzokoe', 'operational', 6.902060, 0.436640),
('ATC TOWER', 601982, 'jasikan', 'tepa_amanya', 'operational', 7.454667, 0.339861),
('ATC TOWER', 601908, 'hohoe municipal', 'lolobi_KMSI', 'operational', 7.218480, 0.529380),
('ATC TOWER', 601897, 'hohoe municipal', 'wegbe', 'operational', 7.112090, 0.457790),
('ATC TOWER', 601916, 'nkwanta south', 'asukokor', 'operational', 7.906111, 0.537972),
('ATC TOWER', 602051, 'kpando', 'vakpo_2 (atsiame)', 'operational', 6.858230, 0.283521),
('ATC TOWER', 601138, 'hohoe', 'hohoe_2', 'operational', 7.146510, 0.464790),
('ATC TOWER', 0, 'jasikan', 'jasikan', 'operational', 7.429890, 0.427450),
('ATC TOWER', 601515, 'keta krachi', 'keta krachi_2', 'operational', 7.793779, -0.049532),
('ATC TOWER', 600695, 'krachi', 'dambai', 'operational', 8.067370, 0.178320),
('ATC TOWER', 601187, 'biakoye', 'abotoase', 'operational', 7.402607, 0.303473),
('ATC TOWER', 601163, 'hohoe', 'golokwati', 'operational', 6.995860, 0.442580),
('ATC TOWER', 601184, 'nkwanta south', 'brewaniase', 'operational', 8.000946, 0.553630),
('ATC TOWER', 601525, 'jasikan', 'bodada', 'operational', 7.364390, 0.491590),
('ATC TOWER', 601927, 'krachi', 'borae_No.2', 'operational', 8.157680, -0.035980),
('ATC TOWER', 601915, 'krachi', 'banda', 'operational', 8.298222, -0.091083),
('ATC TOWER', 601906, 'krachi', 'katanga', 'operational', 7.659310, 0.333900),
('ATC TOWER', 601907, 'jasikan', 'new_ayoma', 'operational', 7.288520, 0.586620),
('ATC TOWER', 601904, 'krachi', 'ntewusae', 'operational', 7.991240, 0.002570),
('ATC TOWER', 601896, 'kpando', 'vakpo', 'operational', 6.829690, 0.327090),
('ATC TOWER', 601605, 'ho municipal', 'santrokofi', 'operational', 7.207670, 0.474190),
('ATC TOWER', 601887, 'hohoe municipal', 'hohoe_3', 'operational', 7.158360, 0.485250),
('ATC TOWER', 601611, 'ketu north', 'kedzi', 'operational', 5.952460, 1.006780),
('ATC TOWER', 0, 'ketu south', 'aflao_1', 'operational', 6.118110, 1.185960),
('SCANCOM/MTN GHANA LIMITED', 600001, 'Scancom Office Osu', 'AMA', 'operational', -0.227060, 5.561070),
('AIRTEL GHANA LIMITED', 0, 'Kpandai', '', 'new installation', 5.094170, 1.508900),
('AIRTEL GHANA LIMITED', 0, 'Yendi', '', 'new installation', 5.503900, 0.535600),
('AIRTEL GHANA LIMITED', 601779, 'Ejura Nkwanta', 'Ejura', 'operational', 7.477472, -1.293000),
('ATC TOWER', 600350, 'Santasi-Round About', 'Kumasi Metropolis', 'operational', 6.670190, -1.647520),
('ATC TOWER', 600698, 'Buduburam', 'Gomoa East', 'operational', 5.520700, -0.479400),
('ATC TOWER', 600701, 'Agona Nyakrom', 'Agona', 'operational', 5.611810, -0.797440),
('ATC TOWER', 600675, 'Cape Coast-4', 'Cape Coast Municipality', 'operational', 5.113800, -1.263900),
('ATC TOWER', 601251, 'Agona Swedro2', 'Agona', 'operational', 5.538070, -0.691180),
('ATC TOWER', 601263, 'Gomoa Akoti-2', 'Awutu-Senya West', 'operational', 5.513400, -0.514800),
('ATC TOWER', 601274, 'Abaasa', 'Ajmako-Enyan-Esam', 'operational', 5.367600, -0.944800),
('ATC TOWER', 601275, 'Brema-Bedum', 'asikuma Odoben Braka', 'operational', 5.527060, -1.100796),
('ATC TOWER', 601612, 'Kasoa-5', 'Awutu-Efutu-Senya', 'operational', 5.530410, -0.438840),
('ATC TOWER', 601614, 'Kasoa-Zongo', 'Awutu-Efutu-Senya', 'operational', 5.533300, -0.424000),
('ATC TOWER', 601620, 'Ekwamkrom', 'Agona', 'operational', 5.507750, -0.696280),
('ATC TOWER', 601621, 'Swedrom Market(rooftop)', 'Agona', 'operational', 5.534600, -0.700100),
('ATC TOWER', 601627, 'Agona Afranse', 'Gomoa', 'operational', 5.505540, -0.752890),
('ATC TOWER', 601690, 'Wamaso', 'Twifo-Hemang-Lower-Denkyira', 'operational', 5.695340, -1.646040),
('ATC TOWER', 601930, 'Fianko', 'Awutu-Efutu-Senya', 'operational', 5.714800, -0.529700),
('ATC TOWER', 601946, 'Gomoa Debiso', 'Gomoa', 'operational', 5.460500, -0.865611),
('ATC TOWER', 601952, 'Cape Vars-3', 'Cape Coast Municipality', 'operational', 5.113700, -1.303400),
('ATC TOWER', 601953, 'Assin Fosu-4', 'Assin', 'operational', 5.697900, -1.273100),
('ATC TOWER', 602033, 'Winneba', 'Efutu', 'operational', 5.690500, -0.614627),
('ATC TOWER', 602187, 'Wassa Amenfi West', 'Mumuni', 'new installation', 5.487950, -2.466410),
('ATC TOWER', 602165, 'Prestea Huni Valley', 'Nsusuaden', 'new installation', 5.592520, -1.935700),
('ATC TOWER', 602189, 'Tarkwa-Nsuaem', 'Adeiwoso', 'new installation', 4.917667, -2.024833),
('ATC TOWER', 602166, 'Tarkwa-Nsuem', 'essaman', 'new installation', 5.010028, -2.086167),
('ATC TOWER', 602196, 'Wassa East', 'Atobiase', 'new installation', 5.352050, -1.551690),
('ATC TOWER', 602185, 'Wassa Amenfi West', 'Wassa Dunkwa', 'new installation', 5.774150, -2.538350),
('ATC TOWER', 602186, 'Wassa Amenfi West', 'Ayensukrom', 'new installation', 5.402970, -2.502800),
('ATC TOWER', 602163, 'Prestea Huni Valley', 'Awudua', 'new installation', 5.425030, -2.089990),
('HTG MANAGED SERVICES LIMITED', 1926, '', 'Ashaiman', 'operational', 5.690460, -0.034720),
('ATC TOWER', 602184, 'Yendi', 'Sariba', 'new installation', 9.702560, -0.098970),
('ATC TOWER', 602231, 'Mamprugu Moagduri', 'Djardema', 'new installation', 10.412830, -1.128940),
('ATC TOWER', 602232, 'West Mamprusi', 'Nabari', 'new installation', 10.439630, -0.875650),
('ATC TOWER', 602233, 'Mamprugu Moagduri', 'Kunkua', 'new installation', 10.329720, -1.160884),
('ATC TOWER', 602235, 'West Mamprusi', 'Bonbonayili', 'new installation', 10.479140, -0.942570),
('HTG MANAGED SERVICES LIMITED', 1507, '', 'Fufulso', 'Operational', 9.124171, -1.268886),
('HTG MANAGED SERVICES LIMITED', 1559, '', 'Nanton', 'Operational', 9.547010, -0.732774),
('HTG MANAGED SERVICES LIMITED', 1513, '', 'Diare', 'Operational', 9.865044, -0.870639),
('HTG MANAGED SERVICES LIMITED', 1516, '', 'Walewale', 'Operational', 10.337357, -0.799334),
('HTG MANAGED SERVICES LIMITED', 1591, '', 'Nalerigu', 'Operational', 10.329209, -0.370385),
('HTG MANAGED SERVICES LIMITED', 1583, '', 'Kalponhin', 'Operational', 9.419170, -0.831108),
('HTG MANAGED SERVICES LIMITED', 1541, '', 'Wulensi', 'Operational', 8.653500, 0.001191),
('ATC TOWER', 602179, 'Ahanta West', 'Akwidaa', 'new installation', 4.726890, -2.033200),
('ATC TOWER', 602175, 'Sewfi Wiaso', 'Sewfi Camp', 'new installation', 5.520100, -2.543850),
('ATC TOWER', 602167, 'Sewfi Wiaso', 'Sewfi Punikrom', 'new installation', 6.322889, -2.503667),
('HTG MANAGED SERVICES LIMITED', 6016, 'GA South', 'Kokrobite(new bortianor)', 'new installation', 0.364970, 5.517960),
('GO TELEVISION', 0, 'Kumasi Metropolis', 'Asafo-Dadiesoaba', 'new installation', 6.679554, 1.609599),
('ATC TOWER', 602195, 'Nadowli', 'Takpo', 'new installation', 10.210740, -2.650650),
('ATC TOWER', 600627, 'asuogyaman', 'Akosombo', 'operational', 6.244275, 0.035250),
('ATC TOWER', 601668, 'New juaben Municipal', 'Koforidua-10', 'operational', 6.080850, -0.280800),
('ATC TOWER', 601877, 'akwapim north', 'New Mangoase', 'operational', 5.952194, -0.290556),
('ATC TOWER', 601965, 'kwahu south', 'Akwasiho', 'operational', 6.617889, -0.821389),
('HTG MANAGED SERVICES LIMITED', 1067, '', 'Baatsona-Kotobabi', 'operational', 5.645700, -0.089070),
('SCANCOM/MTN GHANA LIMITED', 600659, 'New juaben Municipal', 'Koforidua-2', 'operational', 6.089310, -0.241760),
('AIRTEL GHANA LIMITED', 0, 'AMA', 'High Street', 'operational', 5.540360, -0.206139),
('AIRTEL GHANA LIMITED', 0, 'AMA', 'North Kaneshie', 'operational', 5.589100, -0.235080),
('AIRTEL GHANA LIMITED', 0, 'AMA', 'Independence Square', 'operational', 5.546800, -0.194650),
('AIRTEL GHANA LIMITED', 0, 'AMA', 'Accra Brewery', 'operational', 5.554470, -0.217667),
('AIRTEL GHANA LIMITED', 0, 'AMA', 'Data Center 2 Spintex Road', 'operational', 5.635000, -0.129320),
('ATC TOWER', 62198, 'Assin North', 'Assin Kushea', 'new installation', 5.882583, -1.408167),
('ATC TOWER', 601636, 'Mfantinam', 'Duadze, near Mankesin', 'new installation', 5.109080, -1.255390),
('HTG MANAGED SERVICES LIMITED', 1556, 'Bolgatanga Municipal', 'Bolgatanga Zaare', 'new installation', 51.000000, 1048.000000),
('HTG MANAGED SERVICES LIMITED', 1517, 'Builsa District', 'Sandema', 'new installation', 1043.000000, 117.000000),
('HTG MANAGED SERVICES LIMITED', 1543, 'Bolgatanga Municipal', 'Bukere', 'new installation', 84.000000, 1078.000000),
('HTG MANAGED SERVICES LIMITED', 1518, 'Bongo', 'Bongo', 'new installation', 1054.000000, 48.000000),
('HTG MANAGED SERVICES LIMITED', 1161, '', 'Russia', 'operational', 5.555916, -0.255030),
('HTG MANAGED SERVICES LIMITED', 1969, '', 'Nima Market', 'operational', 5.583329, -0.198334),
('HTG MANAGED SERVICES LIMITED', 1156, '', 'Dansoman Agege', 'operational', 5.534720, 0.255550),
('HTG MANAGED SERVICES LIMITED', 1956, '', 'Anyaa NIC Down', 'operational', 5.612770, 0.292220),
('HTG MANAGED SERVICES LIMITED', 1015, '', 'Barnes Road', 'operational', 5.550048, 0.204724),
('HTG MANAGED SERVICES LIMITED', 1151, '', 'Pig Farm', 'operational', 5.598330, 0.195550),
('HTG MANAGED SERVICES LIMITED', 1095, '', 'Abofu', 'operational', 5.611660, 0.224710),
('HTG MANAGED SERVICES LIMITED', 1561, '', 'Bunkpurugu-Yupoo', 'operational', 10.516018, -0.096386),
('AIRTEL GHANA LIMITED', 0, 'Nanumba North', 'Bimbila', 'new installation', 8.860800, 0.053390),
('AIRTEL GHANA LIMITED', 0, 'Nanumba North', 'Chamba', 'new installation', 8.692600, -0.140640),
('AIRTEL GHANA LIMITED', 0, 'East Gonja', 'Salaga', 'new installation', 8.503700, -0.506030),
('ATC TOWER', 602190, 'Sene East', 'Kajaji', 'new installation', 7.785330, -0.226620),
('ATC TOWER', 602159, 'Jaman South', 'Kwameseikrom', 'new installation', 7.631660, -2.904790),
('ATC TOWER', 602162, 'Mim', 'Dominase', 'new installation', 6.945190, -2.714960),
('SCANCOM/MTN GHANA LIMITED', 602134, 'Techiman', 'Techiman-BB', 'operational', 7.589110, -1.919370),
('ATC TOWER', 602199, 'Wassa East', 'New Subri', 'new installation', 5.538850, -1.763530),
('ATC TOWER', 62201, 'Wassa East', 'Wassa Domama', 'new installation', 5.373910, -1.571480),
('ATC TOWER', 602197, 'Wassa East', 'Mamponso', 'new installation', 5.429880, -1.631800),
('HTG MANAGED SERVICES LIMITED', 0, 'Sekondi-Takoradi Metropolis', 'Sekondi Road', 'new installation', -1.732500, 4.933890),
('HTG MANAGED SERVICES LIMITED', 0, 'Sekondi-Takoradi Metropolis', 'Lagos Town', 'new installation', 1.778850, 4.912200),
('HTG MANAGED SERVICES LIMITED', 1967, '', 'Tantra Hill', 'operational', 5.546280, -0.205390),
('HTG MANAGED SERVICES LIMITED', 1501, 'Sissala East', 'Tumu', 'operational', 1.590300, -0.154990),
('HTG MANAGED SERVICES LIMITED', 1546, 'Wa Municipal', 'kpaguri', 'operational', 2.130990, 0.203340),
('HTG MANAGED SERVICES LIMITED', 1529, 'Lawra District', 'Lawra', 'operational', 10.645300, -2.889000),
('HTG MANAGED SERVICES LIMITED', 1504, 'Wa Municipal', 'Dondoli', 'new installation', 10.066967, -2.492106),
('HTG MANAGED SERVICES LIMITED', 0, 'Kumasi Metropolis', 'Adum-Kumasi', 'operational', -1.610418, 6.698034),
('HTG MANAGED SERVICES LIMITED', 0, 'Kumasi Metropolis', 'Pampso', 'operational', -1.610419, 6.698334),
('HTG MANAGED SERVICES LIMITED', 0, 'Kumasi Metropolis', 'Santase', 'operational', -1.642878, 6.660340),
('ATC TOWER', 602180, 'birim north', 'Nkwateng', 'new installation', 6.259260, -1.077340),
('ATC TOWER', 602181, 'Fanteakwa', 'Ahomahomaso', 'new installation', 6.509050, -0.366430),
('HTG MANAGED SERVICES LIMITED', 1403, 'West Akim', 'Asamankese', 'operational', 5.863668, -0.664135),
('HTG MANAGED SERVICES LIMITED', 1409, 'Fanteakwa', 'Osino', 'operational', 6.356976, -0.492777),
('HTG MANAGED SERVICES LIMITED', 1405, 'asuogyaman', 'Akosombo', 'operational', 6.288392, 0.054724),
('HTG MANAGED SERVICES LIMITED', 1431, 'asuogyaman', 'Akosombo Repeater', 'operational', 6.243804, 0.040471),
('HTG MANAGED SERVICES LIMITED', 1408, 'Atiwa', 'Jejeti', 'operational', 6.471781, -0.645548),
('HTG MANAGED SERVICES LIMITED', 1435, 'Suhum-kroboa', 'Suhum Ayekotse', 'operational', 6.031101, -0.447723),
('HTG MANAGED SERVICES LIMITED', 1404, 'suhum-Kroboa', 'Suhum', 'operational', 6.049057, -0.459863),
('HTG MANAGED SERVICES LIMITED', 1432, 'New Juaben', 'Koforidua Gallaway', 'operational', 6.078823, -0.256996),
('HTG MANAGED SERVICES LIMITED', 1401, 'east akim', 'Tafo, CRIG', 'operational', 6.226796, -0.361110),
('HTG MANAGED SERVICES LIMITED', 1427, 'Upper Manya Krobo', 'Asesewa', 'operational', 6.382431, -0.145031),
('HTG MANAGED SERVICES LIMITED', 1400, 'New Juaben', 'Koforidua', 'operational', 6.089449, -0.242778),
('HTG MANAGED SERVICES LIMITED', 1967, '', '48 Engineering Regimnet(Teshie)', 'operational', 5.546280, -0.205390),
('HTG MANAGED SERVICES LIMITED', 1939, '', 'New Ningo', 'operational', 0.158600, 5.737230),
('ATC TOWER', 600028, 'AMA', 'Tesano', 'operational', 5.602650, -0.228100),
('ATC TOWER', 600936, 'Ledzekuku Krowor Municipal', 'Olebuzamzam', 'operational', 5.642647, -0.304680),
('ATC TOWER', 601004, 'Ledzekuku Krowor Municipal', 'Dutch Hotel', 'operational', 5.596306, -0.071556),
('ATC TOWER', 601156, 'dangbe East', 'Bid Ada-2', 'operational', 5.825610, 0.614860),
('ATC TOWER', 60, 'Keta', 'Keta-1', 'operational', 5.897150, -0.987100),
('HTG MANAGED SERVICES LIMITED', 1027, 'AMA', 'Dzorwulu', 'operational', 5.614840, -0.201070),
('HTG MANAGED SERVICES LIMITED', 1025, 'GA South', 'Weija', 'operational', 5.667950, -0.269900),
('HTG MANAGED SERVICES LIMITED', 1051, 'AMA', 'Ministries', 'operational', 5.552147, -0.200261),
('ATC TOWER', 602161, 'Dormaa Municipal', 'Gonokrom', 'new installation', 7.243730, -2.956620),
('ATC TOWER', 602230, 'Builsa South', 'Kadema', 'new installation', 10.590020, -1.231940),
('ATC TOWER', 602234, 'Builsa South', 'Yeri-Wiase', 'new installation', 10.360410, -1.337880),
('HTG MANAGED SERVICES LIMITED', 6018, 'sefwi wiawso', 'Old Adiembra', 'new installation', 6.204080, -2.511300),
('HTG MANAGED SERVICES LIMITED', 6017, 'Dormaa Central', 'Dormaa Ahenkro', 'new installation', -2.876239, 7.265589),
('ATC TOWER', 600609, 'awutu-Efutu- senya', 'Kasoa', 'Operational', 5.540720, -0.429720),
('ATC TOWER', 600610, 'Effutu', 'Winneba-1', 'Operational', 5.382790, -0.643150),
('ATC TOWER', 600672, 'Assin', 'Assin-Fosu-2', 'Operational', 5.687640, -1.268200),
('ATC TOWER', 601265, 'Agona', 'Nyakrom-2', 'Operational', 5.604200, -0.726000),
('ATC TOWER', 601616, 'Gomoa East', 'Budumbiram-3', 'Operational', 5.527100, -0.482200),
('ATC TOWER', 601617, 'awutu-Efutu- senya', 'Winneba-6(Pomadze)', 'Operational', 5.396889, -0.650556),
('ATC TOWER', 601675, 'awutu-Efutu- senya', 'Kasoa-Ofaakor', 'Operational', 5.595400, -0.449500),
('ATC TOWER', 601677, 'Agona East', 'Akwakwaa', 'Operational', 5.677830, -0.625150),
('ATC TOWER', 601679, 'Gomoa', 'Gomoa-Oguaa', 'Operational', 5.417800, -0.813400),
('ATC TOWER', 601680, 'Gomoa West', 'Apam Secondary', 'Operational', 5.305150, -0.738440),
('ATC TOWER', 601691, 'Twifo-Hemang-Lower-Denkyira', 'Twifo-Manpong', 'Operational', 5.527470, -1.554970),
('ATC TOWER', 601692, 'Gomoa', 'Panfokrom', 'Operational', 5.458230, -0.627310),
('ATC TOWER', 601694, 'Komenda-Edina-Eguafo-Abirem', 'Eguafo', 'Operational', 5.163650, 1.413000),
('ATC TOWER', 601695, 'Komenda-Edina-Eguafo-Abirem', 'Brenu-Akyim', 'Operational', 5.069300, -1.423500),
('ATC TOWER', 601696, 'Komenda-Edina-Eguafo-Abirem', 'Elmina Beach', 'Operational', 5.093500, -1.337190),
('ATC TOWER', 601950, 'cape Coast Municipality', 'Antem Cape', 'Operational', 5.122500, -1.256667),
('ATC TOWER', 601956, 'Asikuma Odoben Brakwa', 'Asikuma-3', 'Operational', 5.574917, -0.991861),
('ATC TOWER', 601987, 'Assin', 'Assin Jakai', 'Operational', 5.466066, -1.079872),
('ATC TOWER', 601988, 'Abura-Asebu-Kwamankese', 'Nyamedom', 'Operational', 5.293710, -1.257170),
('ATC TOWER', 602032, 'awutu-Efutu- senya', 'UCEW', 'Operational', 5.340890, -0.628050),
('ATC TOWER', 600607, 'Abura-Asebu-Kwamankese', 'Cape Coast 3', 'operational', 5.337400, -1.169000),
('ATC TOWER', 600613, 'Mfantsinam', 'Saltpond', 'operational', 5.254900, -1.016400),
('ATC TOWER', 600614, 'Mfantsinam', 'Mankessim', 'operational', 5.204700, -1.052100),
('ATC TOWER', 600617, 'Cape Coast ', 'Abura Dunkwa', 'operational', 5.110100, -1.239700),
('ATC TOWER', 600622, 'Gomoa East', 'Gomoa Akoti 1', 'operational', 5.503600, -0.535100),
('ATC TOWER', 600649, 'Ekumfi', 'Otuam', 'operational', 5.217800, -0.810500),
('ATC TOWER', 600702, 'Komenda-Edina-Eguafo-Abirem', 'Komenda', 'operational', 5.052150, -1.493830),
('ATC TOWER', 600704, 'Mfantsinam', 'Anomabo', 'operational', 5.178530, -1.130250),
('ATC TOWER', 601270, 'Abura-Asebu-Kwamankese', 'Abakrampa', 'operational', 5.249990, -1.233320),
('ATC TOWER', 601272, 'Twifo-Hemang-Lower-Denkyira', 'Jukwa Nfuom', 'operational', 5.370210, -1.405360),
('ATC TOWER', 601563, 'Twifo-Hemang-Lower-Denkyira', 'Jukwa ', 'operational', 5.527060, -1.100796),
('ATC TOWER', 601578, 'Mfantsinam', 'Ekumfi Eyisam', 'operational', 5.286600, -0.940400),
('ATC TOWER', 601580, 'Cape coast Metro', 'Nkanfoa', 'operational', 5.138500, -1.243600),
('ATC TOWER', 601618, 'Effutu', 'Winneba-5', 'operational', 5.374056, -0.625861),
('ATC TOWER', 601622, 'Mfantsinam', 'Mankessim-3', 'operational', 5.534600, -0.700100),
('ATC TOWER', 601681, 'Gomoa', 'Gomoa Fetteh', 'operational', 5.424800, -0.473300),
('ATC TOWER', 601682, 'Mfantsinam', 'Eduafo Nkawanta', 'operational', 5.292600, -1.051900),
('ATC TOWER', 601688, 'cape Coast Municipal', 'Effutu Secondary', 'operational', 5.200800, -10000.000000),
('ATC TOWER', 601689, 'Assin', 'Ongwa', 'operational', 5.631960, -1.398220),
('ATC TOWER', 602035, 'Awutu Senya East', 'Akatekye(Obuom Road)', 'operational', 5.546110, -0.419860),
('AIRTEL GHANA LIMITED', 0, '', 'Akim Ayirebi', 'operational', 6.088640, -1.123000),
('AIRTEL GHANA LIMITED', 0, '', 'Chamba', 'operational', 8.692600, -0.140640),
('AIRTEL GHANA LIMITED', 0, '', 'Salaga', 'operational', 8.503710, -0.506300),
('AIRTEL GHANA LIMITED', 0, '', 'Tunu', 'operational', 9.488680, 2.420410),
('AIRTEL GHANA LIMITED', 0, '', 'Chereponi', 'operational', 10.136580, -0.291040),
('HTG MANAGED SERVICES LIMITED', 6050, '', 'Kotokrom', 'new installation', 0.000000, 0.000000),
('ATC TOWER', 602266, 'Techiman Municipality', 'Techiman', 'new installation', 7.602800, -1.936330),
('ATC TOWER', 602261, 'Sunyani West District', 'Kotokrom', 'new installation', 7.347900, 2.273530),
('ATC TOWER', 602204, '', 'Bortianor', 'new installation', 5.545520, -0.342563),
('AIRTEL GHANA LIMITED', 0, '', 'Anaji Namibia', 'operational', 4.930600, 1.783900),
('AIRTEL GHANA LIMITED', 0, '', 'Sekondi Adiembra', 'operational', 4.938810, -7.727740),
('ATC TOWER', 602246, '', 'Brunei Site', 'new installation', 6.670750, 0.157210),
('ATC TOWER', 602215, '', 'Hall Seven', 'new installation', 6.679020, 1.573967),
('ATC TOWER', 602244, '', 'Business School Area', 'new installation', 6.666500, 1.566833),
('ATC TOWER', 602245, '', 'Engineering Guest House Area', 'new installation', 6.670170, 1.579183),
('EATON TOWERS GHANA LIMITED', 64228, '', 'University of Ghana(Ayido Flats)', 'new installation', 5.641305, 0.193517),
('EATON TOWERS GHANA LIMITED', 64626, '', 'Legon(Valco)', 'new installation', 5.645330, 0.186070),
('AIRTEL GHANA LIMITED', 0, '', 'Techiman-2', 'operational', 7.584700, 1.930000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
