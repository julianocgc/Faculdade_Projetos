import 'package:flutter/material.dart';
import 'package:app_telemidia_planos/src/pages/home_page.dart';

class AppPlanos extends StatelessWidget {
  const AppPlanos({super.key});

  @override
  Widget build(BuildContext context){
    return MaterialApp(
      debugShowCheckedModeBanner: false,
    title: 'Telemidia - Planos',
  home: HomePage(),
      );
   }
}