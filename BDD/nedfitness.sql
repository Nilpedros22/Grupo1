-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 15:55:40
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nedfitness`
--
CREATE DATABASE IF NOT EXISTS `nedfitness` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nedfitness`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripción` varchar(750) NOT NULL,
  `Imagen` varchar(1000) NOT NULL,
  `Grupo_Muscular` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`ID`, `Nombre`, `Descripción`, `Imagen`, `Grupo_Muscular`) VALUES
(101, 'Press de banca con barra', 'El press de banca con barra es uno de los ejercicios más populares para trabajar el pecho. Acuéstate en un banco plano con los pies firmemente apoyados en el suelo y levanta la barra desde el soporte. Baja lentamente la barra hacia el pecho, mantén una breve pausa y luego empuja la barra hacia arriba.', 'https://i.blogs.es/85d668/bench-press-1/1366_2000.webp', 'Pecho'),
(102, 'Flexiones de pecho', 'Las flexiones de pecho son un ejercicio clásico que se pueden hacer en cualquier lugar. Coloca las manos en el suelo a la altura de los hombros y los pies juntos o separados, baja el pecho hacia el suelo y luego empuja hacia arriba.', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/press-up-1585328992.jpg?resize=480:*', 'Pecho'),
(103, 'Press de banca inclinado con mancuernas', 'El press de banca inclinado con mancuernas es un ejercicio excelente para trabajar los músculos superiores del pecho. Acuéstate en un banco inclinado con una mancuerna en cada mano, levanta las mancuernas hacia arriba y luego baja lentamente las mancuernas hacia los lados del pecho.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/press-pectoral-con-mancuernas-en-banco-inclinado-init-pos-8206.png', 'Pecho'),
(104, 'Aperturas con mancuernas', 'Las aperturas con mancuernas son un ejercicio excelente para trabajar los músculos laterales del pecho. Acuéstate en un banco plano con una mancuerna en cada mano, levanta los brazos hacia arriba y luego baja los brazos lentamente a los lados, manteniendo un ligero arco en los codos. Cuando sientas un estiramiento en el pecho, levanta los brazos de nuevo a la posición inicial. ', 'https://i.blogs.es/5c0b8f/aperturas/1366_2000.webp', 'Pecho'),
(201, 'Remo con barra', 'El remo con barra es un excelente ejercicio para trabajar los músculos de la espalda. Para realizarlo, toma una barra con un agarre amplio y levanta el peso hasta que toque tu pecho, luego baja lentamente.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/remo-con-barra-de-pie-init-pos-6237.png', 'Espalda'),
(202, 'Dominadas', 'Las dominadas son un ejercicio clásico de espalda que puedes realizar en cualquier barra. Sostén la barra con las manos y levanta tu cuerpo hasta que tu barbilla esté por encima de la barra, luego baja lentamente.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/dominadas-init-pos-4753.png', 'Espalda'),
(203, 'Peso muerto', 'El peso muerto es un ejercicio compuesto que trabaja varios grupos musculares, incluyendo la espalda baja. Para realizarlo, coloca una barra con peso en el suelo y levántala hasta que estés de pie, luego baja lentamente.', 'https://i.blogs.es/19909d/pesomuerto1/1366_2000.webp', 'Espalda'),
(204, 'Pullover con cable', 'El pullover con cable es un ejercicio efectivo para trabajar los músculos de la espalda, el pecho y los brazos. Sostén un cable con ambas manos, coloca los pies en una posición firme y baja el cable detrás de tu cabeza y luego levántalo de nuevo sobre tu cuerpo.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/pullover-con-cable-polea-de-pie-init-pos-9896.png', 'Espalda'),
(301, 'Fondos de Tríceps', 'Los fondos de tríceps son un ejercicio efectivo para trabajar los tríceps. Para realizarlos, coloca tus manos en una barra o en dos barras paralelas y levanta tu cuerpo, luego bájalo lentamente hasta que tus brazos queden paralelos al suelo.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/fondos-en-paralelas-en-maquina-asistida-init-pos-4380.png', 'Tríceps'),
(302, 'Extensiones de Triceps', 'Las extensiones de tríceps son otro ejercicio efectivo para trabajar los tríceps. Para realizarlas, acuéstate en un banco con una mancuerna o una barra y baja lentamente el peso detrás de tu cabeza, luego levántalo de nuevo.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/extension-de-triceps-de-pie-con-polea-alta-init-pos-2088.png', 'Tríceps'),
(303, 'Press Frances', 'El press francés es un gran ejercicio para trabajar los tríceps. Para realizarlo, acuéstate en un banco con una mancuerna o una barra y baja lentamente el peso detrás de tu cabeza, luego levantar de nuevo y repite.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/extension-de-triceps-o-press-frances-con-barra-en-banco-inclinado-init-pos-7429.png', 'Tríceps'),
(304, 'Extensión de Tríceps con Mancuernas', 'Las extensiones de tríceps con mancuernas son un excelente ejercicio para trabajar los tríceps. Para realizarlo, sostén una mancuerna con ambas manos detrás de tu cabeza y levántala extendiendo tus brazos hacia arriba, luego baja lentamente y repite.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/extension-de-triceps-a-una-con-mancuerna-de-pie-init-pos-7296.png', 'Tríceps'),
(401, 'Press de hombros con mancuernas', 'El press de hombros con mancuernas es un excelente ejercicio para trabajar los hombros. Sostén una mancuerna en cada mano, levanta las mancuernas hasta la altura de los hombros y presiona hacia arriba, luego baja lentamente.', 'https://i.blogs.es/6485db/pres-hombro/1366_2000.webp', 'Hombros'),
(402, 'Elevación lateral con mancuernas', 'La elevación lateral con mancuernas es un ejercicio que trabaja la parte lateral del hombro. Sostén una mancuerna en cada mano, levanta los brazos hasta los hombros y levanta las mancuernas hacia los lados, manteniendo los brazos rectos, luego baja lentamente.', 'https://i.blogs.es/7ad688/ejercicio21-3/1366_2000.webp', 'Hombros'),
(403, 'Remo al mentón con barra', 'El remo al mentón con barra es un ejercicio que trabaja los hombros, los trapecios y los brazos. Toma una barra con un agarre amplio, levanta la barra hasta la altura de la barbilla y luego baja lentamente.', 'https://i.blogs.es/18b6f6/remo-cuello/1366_2000.webp', 'Hombros'),
(404, 'Prensa de hombros en máquina', 'La prensa de hombros en máquina es un ejercicio que trabaja los hombros con un movimiento guiado. Siéntate en la máquina con la espalda recta y los pies apoyados en el suelo. Agarra los agarres de la máquina y levanta los brazos hacia arriba hasta que los codos estén completamente extendidos. Luego, baja lentamente hasta la posición inicial y repite el ejercicio.', 'https://depowerlifting.site/wp-content/uploads/2021/06/press-frontal-de-hombros-en-maquina-sentado-y-agarre-neutro-1537.png', 'Hombros'),
(501, 'Curl de bíceps con mancuernas', 'El curl de bíceps con mancuernas es uno de los ejercicios más populares para trabajar los bíceps. Sostén una mancuerna en cada mano, mantén los codos pegados a los costados y levanta las mancuernas hasta los hombros, luego baja lentamente.', 'https://i.blogs.es/d85006/elevaciones1/1366_2000.webp', 'Bíceps'),
(502, 'Curl de martillo con mancuernas', 'El curl de martillo con mancuernas es un excelente ejercicio para trabajar los bíceps y los antebrazos. Sostén una mancuerna en cada mano con los pulgares apuntando hacia arriba, levanta las mancuernas hasta los hombros y luego baja lentamente.', 'https://i.blogs.es/eeba20/martillo1/1366_2000.webp', 'Bíceps'),
(503, 'Curl de bíceps en barra', 'El curl de bíceps en barra es otro ejercicio popular para trabajar los bíceps. Toma una barra con un agarre amplio, levanta la barra hasta los hombros y luego baja lentamente.', 'https://i.blogs.es/70fc57/bicep-curls-1/1366_2000.webp', 'Bíceps'),
(504, 'Curl concentrado con mancuernas', 'El curl concentrado con mancuernas es un ejercicio excelente para trabajar los bíceps y los antebrazos. Siéntate en un banco con una mancuerna en una mano, coloca el brazo que sostiene la mancuerna en el interior del muslo y levanta la mancuerna hacia el hombro, manteniendo el codo fijo en su lugar. Luego, baja lentamente la mancuerna hasta la posición inicial y repite con la otra mano.', 'https://i.blogs.es/3f2207/curl/1366_2000.webp', 'Bíceps'),
(601, 'Sentadillas con barra', 'Las sentadillas con barra son uno de los ejercicios más efectivos para trabajar los músculos de las piernas. Sujeta la barra sobre tus hombros, baja tu cuerpo hasta que tus muslos estén paralelos al suelo, y luego vuelve a la posición inicial.', 'https://i.blogs.es/1fd119/sentadilla/1366_2000.webp', 'Piernas'),
(602, 'Prensa de piernas', 'La prensa de piernas es un ejercicio excelente para trabajar los músculos de las piernas. Siéntate en la máquina de prensa, coloca tus pies en la plataforma, y empuja la plataforma hacia afuera, luego vuelve a la posición inicial.', 'https://i.blogs.es/7425be/prensa1/1366_2000.webp', 'Piernas'),
(603, 'Zancadas con mancuernas', 'Las zancadas con mancuernas son un excelente ejercicio para trabajar los músculos de las piernas y mejorar el equilibrio. Sostén una mancuerna en cada mano, da un gran paso adelante con una pierna, dobla ambas rodillas hasta que la rodilla trasera esté a pocos centímetros del suelo, y luego regresa a la posición inicial. Repite con la otra pierna.', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/zancadas-con-mancuernas-init-pos-1547.png', 'Piernas'),
(604, 'Sentadilla Bulgara', 'La sentadilla búlgara es un ejercicio de piernas muy efectivo que se enfoca en los músculos de las piernas y los glúteos. Es un movimiento desafiante que implica mantener el equilibrio mientras se baja y se levanta con una sola pierna, lo que lo hace ideal para mejorar la fuerza, la estabilidad y la flexibilidad de las piernas. Además, la sentadilla búlgara se puede realizar con o sin peso adicional, lo que la convierte en una opción versátil para cualquier nivel de habilidad. Sin embargo, es importante tener cuidado al realizar este ejercicio y asegurarse de mantener una buena técnica para evitar lesiones. ', 'https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/zancada-con-la-otra-pierna-elevada-init-pos-9604.png', 'Piernas'),
(605, 'Elevaciones de talones', 'Las elevaciones de talones son un excelente ejercicio para trabajar los músculos de las pantorrillas. Párate con los pies separados al ancho de los hombros y coloca los talones en una superficie elevada, como una plataforma o un bloque. Levanta los talones del suelo y luego baja lentamente.', 'https://i.blogs.es/310362/elevacion2/1366_2000.webp', 'Piernas'),
(606, 'Curl de pierna acostado', 'El curl de pierna acostado es un ejercicio que se centra principalmente en los músculos de los muslos, específicamente en los cuádriceps. El movimiento se realiza acostado boca abajo en un banco plano con los tobillos asegurados en un rodillo de espuma. Luego, se levanta el peso del rodillo de espuma al flexionar las rodillas y llevar los talones hacia los glúteos, y se baja lentamente el peso al estirar las piernas. Este ejercicio es especialmente útil para desarrollar la fuerza y el tamaño de los cuádriceps', 'https://i.blogs.es/1fd119/sentadilla/1366_2000.webp', 'Piernas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(4) NOT NULL,
  `Nombre` char(15) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Correo` varchar(35) NOT NULL,
  `Contraseña` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `Correo`, `Contraseña`) VALUES
(3, 'Nil', 'Pedrós Cabrillana', '2001-08-22', 'cabrillana@gmail.com', '13e94c69221eecb3967fee2996d479411186068acee98ae48e555afc481b1782bbcc677548c0be8384de8f0cb8ca42548070d135972a0e077bf7c06b954c1b22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=613;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
