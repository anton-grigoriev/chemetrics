		<div class="col-md-12">
			<div class="alert alert-warning">
				<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Для поиска введите артикул или определяемое вещество">
			</div>
			<table class="table table-hover" id="dev-table">
				<thead>
					<tr>
						<th width="6%">Артикул</th>
						<th width="26%">Определяемое вещество</th>
						<th width="26%">Диапазон</th>
						<th width="14%">Предел обнаружения</th>
						<th width="23%">Метод</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>I-1000</td>
						<td><a href="/analytes.php?id=ph">pH</a></td>
						<td>от -1,00 до 15 pH</td>	
						<td>&mdash;</td>
						<td>рН-метр</td>
					</tr>

					<!--А-->
					<tr>
						<td><h2>А</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-0603</td>
						<td><a href="/analytes.php?id=aluminium">Алюминий</a></td>
						<td>от 0 до 0,25 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-1001</td>
						<td><a href="/analytes.php?id=filming_amine">Алифатические амины</a></td>
						<td>от 0 до 1 ppm</td>
						<td>0,025 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-1000</td>
						<td><a href="/analytes.php?id=filming_amine">Алифатические амины</a></td>
						<td colspan="3">Запасные ампулы для К-1001, 20 шт.</td>
					</tr>

					<tr>
						<td>К-1510</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-1501</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td colspan="3">Запасные ампулы для К-1510, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1510A</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 60 и от 60 до 600 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-1501А</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td colspan="3">Запасные ампулы для К-1510A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1510B</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 120 и от 120 до 1200 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-1501B</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td colspan="3">Запасные ампулы для К-1510B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1510C</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 1000 и от 1000 до 10000 ppm</td>
						<td>100 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-1501C</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td colspan="3">Запасные ампулы для К-1510C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1410</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 20 (до 10000 ppm с А-0188)</td>
						<td>0,125 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-1401</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td colspan="3">Запасные ампулы для К-1410, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1510D</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 30 и от 30 до 300 ppm</td>
						<td>0,125 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-1501D</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td colspan="3">Запасные ампулы для К-1510D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1503</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 7,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-1523</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 14,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-1403</td>
						<td><a href="/analytes.php?id=ammonia">Аммиак</a></td>
						<td>от 0 до 30,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-1510D</td>
						<td><a href="/analytes.php?id=qac">Аммония четвертичные соединения</a></td>
						<td>от 100 до 1000 ppm</td>
						<td>100 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<!--Б-->
					<tr>
						<td><h2>Б</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-1605</td>
						<td><a href="/analytes.php?id=bromine">Бром</a></td>
						<td>от 0 до 2 и от 2 до 10 ppm</td>
						<td>0,1 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-1605</td>
						<td><a href="/analytes.php?id=bromine">Бром</a></td>
						<td colspan="3">Запасные ампулы для К-1605, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1613</td>
						<td><a href="/analytes.php?id=bromine">Бром</a></td>
						<td>от 0 до 12 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--В-->
					<tr>
						<td><h2>В</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-5502</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 0,5 ppm</td>
						<td>0,025 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-5502</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td colspan="3">Запасные ампулы для К-5502, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5510</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-5510</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td colspan="3">Запасные ампулы для К-5510, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5510D</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 30 и от 30 до 300 ppm</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5510D</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td colspan="3">Запасные ампулы для К-5510D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5510A</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 60 и от 60 до 600 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5510A</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td colspan="3">Запасные ампулы для К-5510A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5510B</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 120 и от 120 до 1200 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5510B</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td colspan="3">Запасные ампулы для К-5510B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5510C</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 1200 и от 1200 до 12000 ppm</td>
						<td>200 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5510C</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td colspan="3">Запасные ампулы для К-5510C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5530</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 2 до 20 ppm</td>
						<td>2,0 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-5500С</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>6,0%</td>
						<td>&mdash;</td>
						<td>Контрольная точка</td>
					</tr>
					<tr>
						<td>К-5513</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 3,0 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-5543</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0 до 6,0 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>I-2016</td>
						<td><a href="/analytes.php?id=hydrogen">Водорода перекись</a></td>
						<td>от 0,15 до 6,0 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>

					<!--Г-->
					<tr>
						<td><h2>Г</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-5011</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 50 ppb</td>
						<td>2 ppb</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-5011</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td colspan="3">Запасные ампулы для К-5011, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5005</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 0,5 ppm</td>
						<td>0,005 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-5005</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td colspan="3">Запасные ампулы для К-5005, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5005D</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 12,5 ppm</td>
						<td>0,25 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5005D</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td colspan="3">Запасные ампулы для К-5005D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5005A</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 25 ppm</td>
						<td>0,5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5005A</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td colspan="3">Запасные ампулы для К-5005A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5005B</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 50 ppm</td>
						<td>1 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>К-5005C</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 500 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-5005C</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td colspan="3">Запасные ампулы для К-5005C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5003</td>
						<td><a href="/analytes.php?id=hydrazine">Гидразин</a></td>
						<td>от 0 до 1,2 ppm (фотометр)<br>от 0 до 0,700 ppm (спектрофотометр)</td>
						<td>10 ppm</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-4815</td>
						<td><a href="/analytes.php?id=glycol">Гликоль</a></td>
						<td>от 1 до 15 ppm</td>
						<td>1 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-4815</td>
						<td><a href="/analytes.php?id=glycol">Гликоль</a></td>
						<td colspan="3">Запасные ампулы для К-4815, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4815C</td>
						<td><a href="/analytes.php?id=glycol">Гликоль</a></td>
						<td>от 1000 до 15000 ppm</td>
						<td>1000 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-4815C</td>
						<td><a href="/analytes.php?id=glycol">Гликоль</a></td>
						<td colspan="3">Запасные ампулы для К-4815C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4403</td>
						<td><a href="/analytes.php?id=glycol">Гликоль</a></td>
						<td>от 0 до 10,00 ppm этиленгликоль<br>от 0 до 20,00 ppm пропиленгликоль</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-4423</td>
						<td><a href="/analytes.php?id=glycol">Гликоль</a></td>
						<td>от 0 до 65,00 ppm этиленгликоль<br>от 0 до 32,5 ppm пропиленгликоль</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--Д-->
					<tr>
						<td><h2>Д</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-3902</td>
						<td><a href="/analytes.php?id=deha">ДЭГА (N,N-диэтилгидроксиламин)</a></td>
						<td>от 0 до 400 и от 400 до 3000 ppb</td>
						<td>15 ppb</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-3902</td>
						<td><a href="/analytes.php?id=deha">ДЭГА (N,N-диэтилгидроксиламин)</a></td>
						<td colspan="3">Запасные ампулы для К-3902, 30 шт.</td>
					</tr>
					<tr>
						<td>К-3925</td>
						<td><a href="/analytes.php?id=deha">ДЭГА (N,N-диэтилгидроксиламин)</a></td>
						<td>от 25 до 250 ppm</td>
						<td>25 ppb</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-3903</td>
						<td><a href="/analytes.php?id=deha">ДЭГА (N,N-диэтилгидроксиламин)</a></td>
						<td>от 0 до 2,00 ppm</td>
						<td>25 ppb</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--Ж-->
					<tr>
						<td><h2>Ж</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-6210</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и двухвалентное)</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6201</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и двухвалентное)</a></td>
						<td colspan="3">Запасные ампулы для K-6201, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6010</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6001</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td colspan="3">Запасные ампулы для K-6001, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6010D</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 30 и от 30 до 300 ppm</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-6001D</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td colspan="3">Запасные ампулы для К-6010D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6010A</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 60 и от 60 до 600 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-6001A</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td colspan="3">Запасные ампулы для К-6010A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6010B</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 120 и от 120 до 1200 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-6001B</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td colspan="3">Запасные ампулы для К-6010B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6010C</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 1200 и от 1200 до 12000 ppm</td>
						<td>200 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-6001C</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td colspan="3">Запасные ампулы для К-6010C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6002</td>
						<td><a href="/analytes.php?id=iron">Железо в морской воде</a></td>
						<td>от 0 до 1200 и от 1200 до 12000 ppm</td>
						<td>200 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-6001</td>
						<td><a href="/analytes.php?id=iron">Железо в морской воде</a></td>
						<td colspan="3">Запасные ампулы для К-6002, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6203</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и двухвалентное)</a></td>
						<td>от 0 до 6,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-6003</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 6,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-6013</td>
						<td><a href="/analytes.php?id=iron">Железо (общее и растворенное)</a></td>
						<td>от 0 до 25,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-6023</td>
						<td><a href="/analytes.php?id=iron">Железо (общее)</a></td>
						<td>от 0 до 2,50 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-1705</td>
						<td><a href="/analytes.php?id=hardness">Жесткость</a></td>
						<td>от 50 до 500 ppm CaCO<sub>3</sub></td>
						<td>50 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-1710</td>
						<td><a href="/analytes.php?id=hardness">Жесткость</a></td>
						<td>от 100 до 1000 ppm CaCO<sub>3</sub></td>
						<td>100 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-4502</td>
						<td><a href="/analytes.php?id=hardness">Жесткость</a></td>
						<td>от 2 до 20 ppm CaCO<sub>3</sub></td>
						<td>2,0 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-4520</td>
						<td><a href="/analytes.php?id=hardness">Жесткость</a></td>
						<td>от 20 до 200 ppm CaCO<sub>3</sub></td>
						<td>20 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-4585</td>
						<td><a href="/analytes.php?id=hardness">Жесткость</a></td>
						<td>от 100 до 1000 ppm CaCO<sub>3</sub></td>
						<td>100 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-4530</td>
						<td><a href="/analytes.php?id=hardness">Жесткость</a></td>
						<td>от 250 до 2500 ppm CaCO<sub>3</sub></td>
						<td>20 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<!--К-->
					<tr>
						<td><h2>К</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-1805</td>
						<td><a href="/analytes.php?id=carbohydrazide">Карбогидразид</a></td>
						<td>от 0 до 0,5 и от 0,5 до 4,0 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-1805</td>
						<td><a href="/analytes.php?id=carbohydrazide">Карбогидразид</a></td>
						<td colspan="3">Запасные ампулы для К-1805, 30 шт.</td>
					</tr>
					<tr>
						<td>К-1803</td>
						<td><a href="/analytes.php?id=carbohydrazide">Карбогидразид</a></td>
						<td>от 0 до 2,5 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>K-7511</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0  до 20 ppb</td>
						<td>1 ppb</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7511</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td colspan="3">Запасные ампулы для К-7511, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7540</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 40 ppb</td>
						<td>2,5 ppb</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7540</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td colspan="3">Запасные ампулы для K-7540, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7599</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 100 ppb</td>
						<td>5 ppb</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7599</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td colspan="3">Запасные ампулы для K-7599, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7518</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 5 до 180 ppb</td>
						<td>5 ppb</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7518</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td colspan="3">Запасные ампулы для K-7518, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7501</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 1 ppm</td>
						<td>0,025 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7501</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td colspan="3">Запасные ампулы для K-7501, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7512</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 1 до 12 ppm</td>
						<td>1 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7512</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td colspan="3">Запасные ампулы для K-7512, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7553</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 1,000 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7503</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 2,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7513</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 15,0 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>I-2002</td>
						<td><a href="/analytes.php?id=oxygen">Кислород растворенный</a></td>
						<td>от 0 до 15,0 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>

					<tr>
						<td>К-9011</td>
						<td><a href="/analytes.php?id=silica">Кремния диоксид</a></td>
						<td>от 0 до 0,20 ppm</td>
						<td>0,02 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-9011</td>
						<td><a href="/analytes.php?id=silica">Кремния диоксид</a></td>
						<td colspan="3">Запасные ампулы для K-9011, 30 шт.</td>
					</tr>
					<tr>
						<td>К-9010</td>
						<td><a href="/analytes.php?id=silica">Кремния диоксид</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-9010</td>
						<td><a href="/analytes.php?id=silica">Кремния диоксид</a></td>
						<td colspan="3">Запасные ампулы для K-9010, 30 шт.</td>
					</tr>
					<tr>
						<td>К-9003</td>
						<td><a href="/analytes.php?id=silica">Кремния диоксид</a></td>
						<td>от 0 до 10,00 ppm<br>(спектрофотометр: от 0 до 4,00 ppm)</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--М-->
					<tr>
						<td><h2>М</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-6502</td>
						<td><a href="/analytes.php?id=manganese">Марганец</a></td>
						<td>от 0 до 2 ppm</td>
						<td>0,15 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6502</td>
						<td><a href="/analytes.php?id=manganese">Марганец</a></td>
						<td colspan="3">Запасные ампулы для K-6502, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6502D</td>
						<td><a href="/analytes.php?id=manganese">Марганец</a></td>
						<td>от 0 до 50 ppm</td>
						<td>7,5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-6502D</td>
						<td><a href="/analytes.php?id=manganese">Марганец</a></td>
						<td colspan="3">Запасные ампулы для K-6502D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6503</td>
						<td><a href="/analytes.php?id=manganese">Марганец</a></td>
						<td>от 0 до 30,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-3510</td>
						<td><a href="/analytes.php?id=copper">Медь растворенная</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-3510</td>
						<td><a href="/analytes.php?id=copper">Медь растворенная</a></td>
						<td colspan="3">Запасные ампулы для K-3510, 30 шт.</td>
					</tr>
					<tr>
						<td>К-3503</td>
						<td><a href="/analytes.php?id=copper">Медь растворенная</a></td>
						<td>от 0 до 12,00 ppm<br>(спектрофотометр: от 0 до 7,00 ppm)</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-6810</td>
						<td><a href="/analytes.php?id=mbt">Меркаптобензатиазол</a></td>
						<td>от 50 до 500 ppm</td>
						<td>50 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<tr>
						<td>I-1100</td>
						<td><a href="/analytes.php?id=tds">Минерализация общая</a></td>
						<td>от 0 до 2000 ppm и от 0 до 10 ppt</td>
						<td>&mdash;</td>
						<td>TDS-метр</td>
					</tr>

					<tr>
						<td>К-6701</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td>от 0 до 7 ppm Mo</td>
						<td>0,5 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6701</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td colspan="3">Запасные ампулы для K-6701, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6702</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td>от 2 до 24 ppm Mo</td>
						<td>2 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6702</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td colspan="3">Запасные ампулы для K-6702, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6720</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td>от 20 до 200 ppm Mo</td>
						<td>20 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6720</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td colspan="3">Запасные ампулы для K-6720, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6703</td>
						<td><a href="/analytes.php?id=molybdate">Молибдат</a></td>
						<td>от 0 до 25,0 ppm Mo</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-9400</td>
						<td><a href="/analytes.php?id=detergents">Моющие средства</a></td>
						<td>от 0 до 3 ppm</td>
						<td>0,125 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-9400</td>
						<td><a href="/analytes.php?id=detergents">Моющие средства</a></td>
						<td colspan="3">Запасные ампулы для K-9400, 20 шт.</td>
					</tr>
					<tr>
						<td>К-9404</td>
						<td><a href="/analytes.php?id=detergents">Моющие средства</a></td>
						<td>от 0 до 1400 ppm</td>
						<td>100 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-9404</td>
						<td><a href="/analytes.php?id=detergents">Моющие средства</a></td>
						<td colspan="3">Запасные ампулы для K-9404, 20 шт.</td>
					</tr>
					<tr>
						<td>I-2017</td>
						<td><a href="/analytes.php?id=detergents">Моющие средства</a></td>
						<td>от 0 до 2,50 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>
					<tr>
						<td>R-9423</td>
						<td><a href="/analytes.php?id=detergents">Моющие средства</a></td>
						<td colspan="3">Запасные ампулы для I-2017, 20 шт.</td>
					</tr>
					
					<tr>
						<td>I-1300</td>
						<td><a href="/analytes.php?id=turbidity">Мутность</a></td>
						<td>от 0 до 1000 NTU</td>
						<td>&mdash;</td>
						<td>Мутномер</td>
					</tr>

					<!--Н-->
					<tr>
						<td><h2>Н</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-6905</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 3 ppm N</td>
						<td>0,25 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6905</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td colspan="3">Запасные ампулы и подушечки с цинком для К-6905, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6904</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 3 ppm N</td>
						<td>0,4 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6902</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td colspan="3">Запасные ампулы и подушечки с кадмием для К-6904, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6909D</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 30 ppm N</td>
						<td>4 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6904</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td colspan="3">Запасные ампулы и подушечки с кадмием для К-6909A и К-6909D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6909A</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 150 ppm N</td>
						<td>20 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>К-6909B</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 450 ppm N</td>
						<td>60 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-6909</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td colspan="3">Запасные ампулы, подушечки с кадмием и микродозаторы для К-6909B и К-6909C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-6909C</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 1800 ppm N</td>
						<td>240 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>К-6913</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 1,00 ppm N</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-6903</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 1,50 ppm N</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-6923</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 3 ppm N</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-6933</td>
						<td><a href="/analytes.php?id=nitrate">Нитраты</a></td>
						<td>от 0 до 50,0 ppm N0<sub>3</sub></td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-7004</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 0 до 2,2 ppm N</td>
						<td>0,25 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7004</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td colspan="3">Запасные ампулы для К-7004, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7004D</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 0 до 70 ppm N</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-7002D</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td colspan="3">Запасные ампулы для К-7004D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7004A</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 0 до 150 ppm N</td>
						<td>12,5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-7002A</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td colspan="3">Запасные ампулы для К-7004A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7004B</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 0 до 260 ppm N</td>
						<td>25 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-7002B</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td colspan="3">Запасные ампулы для К-7004B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7004C</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 0 до 2600 ppm N</td>
						<td>250 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-7002C</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td colspan="3">Запасные ампулы для К-7004C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7025</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 250 до 2500 ppm NaNO<sub>2</sub></td>
						<td>250 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-7050</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 500 до 5000 ppm NaNO<sub>2</sub></td>
						<td>500 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-7003</td>
						<td><a href="/analytes.php?id=nitrite">Нитриты</a></td>
						<td>от 0 до 0,800 ppm N</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--О-->
					<tr>
						<td><h2>О</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-7404</td>
						<td><a href="/analytes.php?id=ozone">Озон</a></td>
						<td>от 0 до 0,6 и от 0,6 до 3 ppm</td>
						<td>0,025 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7404</td>
						<td><a href="/analytes.php?id=ozone">Озон</a></td>
						<td colspan="3">Запасные ампулы для К-7404, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7423</td>
						<td><a href="/analytes.php?id=ozone">Озон</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>I-2019</td>
						<td><a href="/analytes.php?id=ozone">Озон</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>
					<tr>
						<td>К-7433</td>
						<td><a href="/analytes.php?id=ozone">Озон</a></td>
						<td>от 0 до 0,75 ppm</td>
						<td>&mdash;</td>
						<td>Метод Индиго</td>
					</tr>

					<!--П-->
					<tr>
						<td><h2>П</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-7904</td>
						<td><a href="/analytes.php?id=peracetic">Перуксусная кислота</a></td>
						<td>от 0 до 1 и от 1 до 15 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7904</td>
						<td><a href="/analytes.php?id=peracetic">Перуксусная кислота</a></td>
						<td colspan="3">Запасные ампулы для К-7904, 30 шт.</td>
					</tr>
					<tr>
						<td>К-7913</td>
						<td><a href="/analytes.php?id=peracetic">Перуксусная кислота</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>I-2020</td>
						<td><a href="/analytes.php?id=peracetic">Перуксусная кислота</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>

					<tr>
						<td>К-7904</td>
						<td><a href="/analytes.php?id=permanganate">Перманганат</a></td>
						<td>от 0,3 до 3 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<tr>
						<td>К-7870</td>
						<td><a href="/analytes.php?id=persulfate">Персульфат</a></td>
						<td>от 0 до 7 и от 7 до 70 ppm Na<sub>2</sub>S<sub>2</sub>O<sub>8</sub></td>
						<td>0,35 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-7870</td>
						<td><a href="/analytes.php?id=persulfate">Персульфат</a></td>
						<td colspan="3">Запасные ампулы для К-7870, 30 шт.</td>
					</tr>	

					<!--С-->
					<tr>
						<td><h2>С</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-9602</td>
						<td><a href="/analytes.php?id=sulfite">Сульфиты</a></td>
						<td>от 2 до 20 ppm</td>
						<td>2,0 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-9605</td>
						<td><a href="/analytes.php?id=sulfite">Сульфиты</a></td>
						<td>от 5 до 50 ppm</td>
						<td>5,0 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-9610</td>
						<td><a href="/analytes.php?id=sulfite">Сульфиты</a></td>
						<td>от 10 до 100 ppm</td>
						<td>10 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-9650</td>
						<td><a href="/analytes.php?id=sulfite">Сульфиты</a></td>
						<td>от 50 до 500 ppm</td>
						<td>50 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-9610W</td>
						<td><a href="/analytes.php?id=sulfite">Сульфиты в вине</a></td>
						<td>от 10 до 100 ppm</td>
						<td>10 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<!--Т-->
					<tr>
						<td><h2>Т</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-9705</td>
						<td><a href="/analytes.php?id=thiosulfate">Тиосульфат</a></td>
						<td>от 5 до 50 ppm</td>
						<td>5,0 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<!--У-->
					<tr>
						<td><h2>У</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>I-9312</td>
						<td><a href="/analytes.php?id=tph">Углеводороды общие нефтяные в почве</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td>TPH-фотометр<br>без расходных материалов</td>
					</tr>
					<tr>
						<td>R-9310</td>
						<td><a href="/analytes.php?id=tph">Углеводороды общие нефтяные в почве</a></td>
						<td>&mdash;</td>
						<td>&mdash;</td>
						<td>Запасные ампулы для I-9312</td>
					</tr>

					<tr>
						<td>К-1910</td>
						<td><a href="/analytes.php?id=carbon">Углерода диоксид</a></td>
						<td>от 10 до 100 ppm</td>
						<td>10 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-1920</td>
						<td><a href="/analytes.php?id=carbon">Углерода диоксид</a></td>
						<td>от 100 до 1000 ppm</td>
						<td>100 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-1925</td>
						<td><a href="/analytes.php?id=carbon">Углерода диоксид</a></td>
						<td>от 200 до 2500 ppm</td>
						<td>250 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<!--Ф-->
					<tr>
						<td><h2>Ф</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-8012</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 1 и от 0 до 12 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-8012</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td colspan="3">Запасные ампулы для К-8012, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8012D</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 30 и от 0 до 350 ppm</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8012D</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td colspan="3">Запасные ампулы для К-8012D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8012A</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 60 и от 0 до 700 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8012A</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td colspan="3">Запасные ампулы для К-8012A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8012B</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 120 и от 0 до 1400 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8012B</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td colspan="3">Запасные ампулы для К-8012B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8012C</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 1000 и от 0 до 13000 ppm</td>
						<td>100 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8012C</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td colspan="3">Запасные ампулы для К-8012C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8003</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 8,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-8023</td>
						<td><a href="/analytes.php?id=phenols">Фенолы</a></td>
						<td>от 0 до 20,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-4605</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td>от 0 до 1 и от 0 до 5 ppm</td>
						<td>0,1 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-4605</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td colspan="3">Запасные ампулы для К-4605, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4605D</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td>от 0 до 30 и от 30 до 150 ppm</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-4605D</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td colspan="3">Запасные ампулы для К-4605D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4605A</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td>от 0 до 60 и от 60 до 300 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-4605A</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td colspan="3">Запасные ампулы для К-4605A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4605B</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td>от 0 до 120 и от 120 до 600 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-4605B</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td colspan="3">Запасные ампулы для К-4605B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4605C</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td>от 0 до 1200 и от 1200 до 6000 ppm</td>
						<td>200 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-4605C</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td colspan="3">Запасные ампулы для К-4605C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-4203</td>
						<td><a href="/analytes.php?id=formaldehyde">Формальдегид</a></td>
						<td>от 0 до 8,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-8540</td>
						<td><a href="/analytes.php?id=totalphosphate">Фосфаты общие</a></td>
						<td>от 0 до 2,30 ppm P; от 0 до 7,00 ppm PO<sub>4</sub></td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-8510</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 1 и от 0 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-8510</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td colspan="3">Запасные ампулы для К-8510, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8530</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 2 до 30 ppm</td>
						<td>2 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>К-8515</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 10 до 150 ppm</td>
						<td>10 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-8515</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td colspan="3">Запасные ампулы для К-8515 и К-8530, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8510D</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 30 и от 30 до 300 ppm</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8510D</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td colspan="3">Запасные ампулы для К-8510D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8510A</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 60 и от 60 до 600 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8510A</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td colspan="3">Запасные ампулы для К-8510A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8510B</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 120 и от 120 до 1200 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8510B</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td colspan="3">Запасные ампулы для К-8510B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8510C</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 1200 и от 1200 до 12000 ppm</td>
						<td>200 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-8510C</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td colspan="3">Запасные ампулы для К-8510C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-8513</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 8,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-8503</td>
						<td><a href="/analytes.php?id=ortophosphate">Фосфаты орто</a></td>
						<td>от 0 до 80,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--Х-->
					<tr>
						<td><h2>Х</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-2511</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 0,20 ppm </td>
						<td>0,04 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-2511</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td colspan="3">Запасные ампулы для К-2511, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2504</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 1 и от 0 до 5 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-2500</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td colspan="3">Запасные ампулы для К-2504, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2504D</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 25 и от 30 до 125 ppm</td>
						<td>5 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>К-2505А</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 50 и от 0 до 250 ppm</td>
						<td>5 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-2504</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td colspan="3">Запасные ампулы для К-2504A и К-2504D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2505B</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 100 и от 0 до 500 ppm</td>
						<td>20 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>К-2504C</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 400 и от 0 до 2000 ppm</td>
						<td>20 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-2509</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td colspan="3">Запасные ампулы и наконечники для К-2505B и К-2504C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-5808</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 1,55% (гипохлорит)</td>
						<td>0,3%</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>К-5816</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 1,55% (гипохлорит)</td>
						<td>0,3%</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-5808</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td colspan="3">Запасные ампулы и наконечники для К-5808 и К-5816, 30 шт.</td>
					</tr>
					<tr>
						<td>K-2523</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>K-2513</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 5,00 ppm (свободный хлор)</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>I-2001</td>
						<td><a href="/analytes.php?id=chlorine">Хлор</a></td>
						<td>от 0 до 5,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>

					<tr>
						<td>К-2705</td>
						<td><a href="/analytes.php?id=chlorinedioxide">Хлора диоксид</a></td>
						<td>от 0 до 2 и от 0 до 10 ppm</td>
						<td>0,1 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-2705</td>
						<td><a href="/analytes.php?id=chlorinedioxide">Хлора диоксид</a></td>
						<td colspan="3">Запасные ампулы для К-2705, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2703</td>
						<td><a href="/analytes.php?id=chlorinedioxide">Хлора диоксид</a></td>
						<td>от 0 до 11,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>I-2005</td>
						<td><a href="/analytes.php?id=chlorinedioxide">Хлора диоксид</a></td>
						<td>от 0 до 11,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$sam?></td>
					</tr>

					<tr>
						<td>К-2020</td>
						<td><a href="/analytes.php?id=chloride">Хлорид</a></td>
						<td>от 20 до 200 ppm</td>
						<td>20 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-2050</td>
						<td><a href="/analytes.php?id=chloride">Хлорид</a></td>
						<td>от 50 до 500 ppm</td>
						<td>50 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-2051</td>
						<td><a href="/analytes.php?id=chloride">Хлорид</a></td>
						<td>от 250 до 2500 ppm</td>
						<td>250 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-2055</td>
						<td><a href="/analytes.php?id=chloride">Хлорид</a></td>
						<td>от 1000 до 10000 ppm</td>
						<td>1000 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-2070</td>
						<td><a href="/analytes.php?id=chloride">Хлорид</a></td>
						<td>от 10000 до 100000 ppm</td>
						<td>10000 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-2103</td>
						<td><a href="/analytes.php?id=chloride">Хлорид</a></td>
						<td>от 0 до 40,0 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-7340S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 40</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7350S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 150</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7355</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 150</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7351S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 150</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7356</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 150</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7360S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 1500</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7365</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 1500</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7361S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 1500</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7366</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 1500</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7370S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 15000</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7375</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 15000</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7371S</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 15000</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-7376</td>
						<td><a href="/analytes.php?id=cod">Химическое потребление кислорода (ХПК)</a></td>
						<td>от 0 до 15000</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-2810</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td>от 0 до 1 и от 1 до 10 ppm</td>
						<td>0,05 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-2810</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td colspan="3">Запасные ампулы для К-2810, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2810D</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td>от 0 до 30 и от 30 до 300 ppm</td>
						<td>5 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-2810D</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td colspan="3">Запасные ампулы для К-2810D, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2810A</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td>от 0 до 60 и от 60 до 600 ppm</td>
						<td>10 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-2810A</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td colspan="3">Запасные ампулы для К-2810A, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2810B</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td>от 0 до 120 и от 120 до 1200 ppm</td>
						<td>20 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-2810B</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td colspan="3">Запасные ампулы для К-2810B, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2810C</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td>от 0 до 1200 и от 1200 до 12000 ppm</td>
						<td>200 ppm</td>
						<td><?=$vacuettes?></td>
					</tr>
					<tr>
						<td>R-2810C</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td colspan="3">Запасные ампулы для К-2810C, 30 шт.</td>
					</tr>
					<tr>
						<td>К-2803</td>
						<td><a href="/analytes.php?id=chromate">Хромат шестивалентный</a></td>
						<td>от 0 до 3,5 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--Ц-->
					<tr>
						<td><h2>Ц</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-3810</td>
						<td><a href="/analytes.php?id=cyanide">Цианид</a></td>
						<td>от 0 до 0,1 и от 0,1 до 1 ppm</td>
						<td>0,005 ppm</td>
						<td><?=$chemets?></td>
					</tr>
					<tr>
						<td>R-3810C</td>
						<td><a href="/analytes.php?id=cyanide">Цианид</a></td>
						<td colspan="3">Запасные ампулы для К-3810, 30 шт.</td>
					</tr>
					<tr>
						<td>К-3815</td>
						<td><a href="/analytes.php?id=cyanide">Цианид</a></td>
						<td>от 5 до 50 ppm</td>
						<td>5,0 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-3803</td>
						<td><a href="/analytes.php?id=cyanide">Цианид</a></td>
						<td>от 0 до 0,400 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<tr>
						<td>К-9903</td>
						<td><a href="/analytes.php?id=zinc">Цинк</a></td>
						<td>от 0 до 3,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>
					<tr>
						<td>К-9923</td>
						<td><a href="/analytes.php?id=zinc">Цинк</a></td>
						<td>от 0 до 6,00 ppm</td>
						<td>&mdash;</td>
						<td><?=$vacuVialsMethod?></td>
					</tr>

					<!--Щ-->
					<tr>
						<td><h2>Щ</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>К-9810</td>
						<td><a href="/analytes.php?id=alcalinity">Щелочность (общая)</a></td>
						<td>от 10 до 100 ppm CaCO<sub>3</sub></td>
						<td>10 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-9815</td>
						<td><a href="/analytes.php?id=alcalinity">Щелочность (общая)</a></td>
						<td>от 50 до 500 ppm CaCO<sub>3</sub></td>
						<td>50 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-9820</td>
						<td><a href="/analytes.php?id=alcalinity">Щелочность (общая)</a></td>
						<td>от 100 до 1000 ppm CaCO<sub>3</sub></td>
						<td>100 ppm</td>
						<td><?=$titrets?></td>
					</tr>
					<tr>
						<td>К-4710</td>
						<td><a href="/analytes.php?id=alcalinity">Щелочность (гидратная)</a></td>
						<td>от 100 до 1000 ppm CaCO<sub>3</sub></td>
						<td>100 ppm</td>
						<td><?=$titrets?></td>
					</tr>

					<!--Э-->
					<tr>
						<td><h2>Э</h2></td><td colspan="5"></td>
					</tr>

					<tr>
						<td>I-1200</td>
						<td><a href="/analytes.php?id=conductivity">Электропроводность</a></td>
						<td>от 0 до 2000 μS и от 0 до 20 mS</td>
						<td>&mdash;</td>
						<td>Кондуктометр</td>
					</tr>
				</tbody>
			</table>
		</div>
