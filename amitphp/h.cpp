import java.awt.*;
import java.awt.event.*;

class KeyEventDemo extends Frame implements KeyListener {
    private TextArea textArea;

    public KeyEventDemo() {
        super("Key Event Demo");
        textArea = new TextArea(20);
        textArea.addKeyListener(this);
        add(textArea, BorderLayout.NORTH);
        setSize(300, 200);
        setVisible(true);
    }

    public void keyPressed(KeyEvent e) {
        textArea.setText(textArea.getText() + "Key Pressed: " + e.getKeyChar());
    }

    public void keyReleased(KeyEvent e) {
        textArea.setText(textArea.getText() + "Key Released: " + e.getKeyChar());
    }

    public void keyTyped(KeyEvent e) {
        textArea.setText(textArea.getText() + "Key Typed: " + e.getKeyChar());
    }

    public static void main(String[] args) {
        new KeyEventDemo();
    }
}