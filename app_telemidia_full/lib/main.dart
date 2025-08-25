import 'package:flutter/material.dart';

void main(){
  runApp(const MyApp());
}
class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Telemidia',
      home: Scaffold(
        appBar: AppBar(
          backgroundColor: const Color(0xFF0000FF),
          foregroundColor: const Color(0xFFFFFFFF),
          centerTitle: true,
          title: Text('TELEMIDIA'),
        ),
        body: const Center(
          child: Text('A Melhor Internet!'),
        ),
      ),
    );
  }
}
