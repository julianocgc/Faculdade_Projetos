import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        centerTitle: true,
        backgroundColor: Color(0xFF314E94),
        foregroundColor: Color(0XFFFFFFFF),
        title: Text('Telemidia - Planos',
        style: TextStyle(
          fontSize: 20,
          fontWeight: FontWeight.w500,
            ),
          ),
        ),
      backgroundColor: Color(0xFFD5D7E0),
      body: Padding(
          padding: const EdgeInsets.all(10.0),
          child: Container(
            alignment: Alignment.center,
            child: Column(
                children: [
                  const Text(
                    'Escolha o seu plano!',
                  style: TextStyle(
                    fontSize: 25,
                    fontWeight: FontWeight.bold,
                    color: Color(0xFF67686E),
                  ),
                ),
            SizedBox(height: 20),
            ElevatedButton(
              style: ElevatedButton.styleFrom(
                shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(10)
                ),
                    backgroundColor: Color(0xFFF2D946)
              ),
                onPressed: () {},
                child: const Text('COMBO START 350M',
                  style: TextStyle(
                    fontSize: 15,
                    fontWeight: FontWeight.bold,
                    color: Color(0xFF314E94)
                  ),
                ),
              ),
                  SizedBox(height: 20),
                  ElevatedButton(
                    style: ElevatedButton.styleFrom(
                        shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(10)
                        ),
                        backgroundColor: Color(0xFFF2D946)
                    ),
                    onPressed: () {},
                    child: const Text('COMBO SUPER 550M',
                      style: TextStyle(
                          fontSize: 15,
                          fontWeight: FontWeight.bold,
                          color: Color(0xFF314E94)
                      ),
                    ),
                  ),
                  SizedBox(height: 20),
                  ElevatedButton(
                    style: ElevatedButton.styleFrom(
                        shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(10)
                        ),
                        backgroundColor: Color(0xFFF2D946)
                    ),
                    onPressed: () {},
                    child: const Text('COMBO SPLUS 600M',
                      style: TextStyle(
                          fontSize: 15,
                          fontWeight: FontWeight.bold,
                          color: Color(0xFF314E94)
                      ),
                    ),
                  ),
                  SizedBox(height: 20),
                  ElevatedButton(
                    style: ElevatedButton.styleFrom(
                        shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(10)
                        ),
                        backgroundColor: Color(0xFFF2D946)
                    ),
                    onPressed: () {},
                    child: const Text('COMBO MAX-I 650M',
                      style: TextStyle(
                          fontSize: 15,
                          fontWeight: FontWeight.bold,
                          color: Color(0xFF314E94)
                      ),
                    ),
                  ),
                  SizedBox(height: 20),
                  ElevatedButton(
                    style: ElevatedButton.styleFrom(
                        shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(10)
                        ),
                        backgroundColor: Color(0xFFF2D946)
                    ),
                    onPressed: () {},
                    child: const Text('SUPERTV TELEMIDIA',
                      style: TextStyle(
                          fontSize: 15,
                          fontWeight: FontWeight.bold,
                          color: Color(0xFF314E94)
                      ),
                    ),
                  ),
           ],
         ),
       ),
      ),
    );
  }
}